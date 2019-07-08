<?php
$data = "计算机基础";
$data = urlencode($data);
$c = exec("python E:/PHP/htdocs/test/admin/python/model_predict.py {$data}",$out,$res);//调用python包
print($out[1]);
?>