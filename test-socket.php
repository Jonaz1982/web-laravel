<?php
set_error_handler(function($s, $m) {
    echo $m . PHP_EOL;
});

$s = @stream_socket_server("tcp://127.0.0.1:18000", $errno, $errstr);

var_dump($s);
var_dump($errno);
var_dump($errstr);
