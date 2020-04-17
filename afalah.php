<?php

$json_string = json_encode($_GET);

$file_handle = fopen('af_get.txt', 'w+');
fwrite($file_handle, $json_string);
fclose($file_handle);

$json_string = json_encode($_POST);

$file_handle = fopen('af_post.txt', 'w+');
fwrite($file_handle, $json_string);
fclose($file_handle);

var_dump($_POST);