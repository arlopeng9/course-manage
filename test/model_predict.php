<?php
$data = "每次都去，老师会讽刺小组展示，感觉不尊重人。照本宣科，课程无聊";
$data = urlencode($data);
exec("python E:/PHP/htdocs/test/python/model_predict.py {$data}", $out, $res);
print($out[0]);