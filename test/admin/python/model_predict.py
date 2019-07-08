import io
import sys
import urllib.parse

import jieba
import tflearn
import pandas as pd
from sklearn import preprocessing
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import CountVectorizer
from tflearn.data_utils import pad_sequences


def comment_predict(data):
	"""
	根据已有模型对评论倾向进行预测
	:return:
	"""
	# 建立模型时用到的评论数据
	predict_data = pd.read_csv("python/courses.csv")

	def chinese_word_cut(text):
		"""
		使用结巴分词对中文进行切分转化为独立的词语
		:param text: 完整的评论
		:return: 切分后的评论
		"""
		return " ".join(jieba.cut(text))

	# 进行分词并新建一列保存结果
	predict_data["cut_name"] = predict_data.name.apply(chinese_word_cut)

	# 确定评论部分(X)和标签部分(y)
	X = predict_data["cut_name"]
	y = predict_data["type"]

	# 对数据集进行切分，分为训练集(train)和测试集(test)
	# 这里随机数种子要和建立模型时的随机数种子一样
	X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.1, random_state=42)

	def get_custom_stopwords(stop_words_file):
		"""
		得到停用词表
		:param stop_words_file:
		:return: 停用词表list
		"""
		with open(stop_words_file, encoding="utf-8") as f:
			stopwords = f.read()

		stopwords_list = stopwords.split("\n")
		custom_stopwords_list = [i for i in stopwords_list]
		return custom_stopwords_list

	# 得到停用词表
	stop_words_file = "python/stop_words/哈工大停用词表.txt"
	stopwords = get_custom_stopwords(stop_words_file)

	# 计算特征数值
	vect = CountVectorizer(token_pattern=u'(?u)\\b\\w+\\b', stop_words=frozenset(stopwords))
	vect.fit(X_train)
	vocab = vect.vocabulary_

	def convert_X_to_X_word_ids(X):
		"""
		将评论(文字部分)转化为id集(数值序列)
		:param X:评论集合
		:return:数值序列
		"""
		return X.apply(lambda x: [vocab[w] for w in [w.lower().strip() for w in x.split()] if w in vocab])

	# 序列扩充，统一延长到长度为20的序列，使得评论序列格式相同，不足的用0代替
	X_train_word_ids = convert_X_to_X_word_ids(X_train)
	X_train_padded_seqs = pad_sequences(X_train_word_ids, maxlen=20, value=0)

	# 标签集处理
	unique_y_labels = list(y_train.value_counts().index)
	le = preprocessing.LabelEncoder()
	le.fit(unique_y_labels)

	# 构造网络
	size_of_each_vector = X_train_padded_seqs.shape[1]
	vocab_size = len(vocab)
	no_of_unique_y_labels = len(unique_y_labels)

	net = tflearn.input_data([None, size_of_each_vector])
	net = tflearn.embedding(net, input_dim=vocab_size, output_dim=128)
	net = tflearn.lstm(net, 128, dropout=0.6)
	net = tflearn.fully_connected(net, no_of_unique_y_labels, activation='softmax')
	net = tflearn.regression(net, optimizer='adam', learning_rate=1e-4, loss='categorical_crossentropy')

	# 初始化
	model = tflearn.DNN(net, tensorboard_verbose=0, tensorboard_dir="python/tflearn_data/tflearn_logs/")

	# 加载模型
	model.load("python/tflearn_data/tflearn_models/2019-07-08 11.51.40.170202(200, 42)/model")

	# ———————————————————————————————————————预测部分———————————————————————————————————————
	# 待预测的评论数据
	predict_data = data

	# 对评论数据进行分词
	predict_data["cut_name"] = predict_data.name.apply(chinese_word_cut)

	# 设置预测集
	predict_X = predict_data["cut_name"]
	vect.fit(predict_X)

	# 转化为数值序列
	predict_X_word_ids = convert_X_to_X_word_ids(predict_X)
	predict_X_padded_seqs = pad_sequences(predict_X_word_ids, maxlen=20, value=0)

	# 进行预测并得到结果
	predict_Y = model.predict(predict_X_padded_seqs)

	# 输出结果
	print(predict_Y)
	get_type(predict_Y)

def get_type(predict_Y):
	"""
	得到课程所属的类型
	:param predict_Y:
	:return:
	"""
	for type in predict_Y:
		# 得到good的值
		Humanities_and_Society = type[0]
		Nature_and_Engineering = type[1]
		Art_and_Appreciation = type[2]

		# 设置一个阈值，这里定为0.5，大于阈值则说明该评论倾向于good
		if Humanities_and_Society > Nature_and_Engineering:
			if Humanities_and_Society > Art_and_Appreciation:
				print("人文与社会类")
			else:
				print("艺术与欣赏类")
		else:
			if Nature_and_Engineering > Art_and_Appreciation:
				print("自然与工程类")
			else:
				print("艺术与欣赏类")

if __name__ == '__main__':
	sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')
	comment = urllib.parse.unquote(sys.argv[1])
	data = pd.DataFrame({'name': comment}, index=[0])
	comment_predict(data)
