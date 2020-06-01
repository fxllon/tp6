<?php
require './vendor/autoload.php';

$a = 'abc';
var_dump($a);

$data = '1234567887654321';
$method = 'aes-256-cbc';
$passwd = '12344321';
$options = OPENSSL_RAW_DATA;
$iv = '1234567887654321';

$result = openssl_encrypt($data, $method, $passwd, $options, $iv);
var_dump($result);
$de = openssl_decrypt($result, $method, $passwd, $options, $iv);
var_dump($de);