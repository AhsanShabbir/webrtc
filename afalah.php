<?php

$json_string = json_encode($_GET);

$file_handle = fopen('af.txt', 'w+');
fwrite($file_handle, $json_string);
fclose($file_handle);