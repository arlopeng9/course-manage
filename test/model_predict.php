<?php
$data = "课程很好";
$data = urlencode($data);
exec("python E:/PHP/htdocs/test/python/model_predict.py {$data}", $out, $res);
print($out[0]);