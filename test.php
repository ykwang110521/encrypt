<?php
require 'vendor/autoload.php';

use Encrypt\Encrypter;

$iv = '9787115473894579';
$key = 'dehd1ad26bdsfeaL';
$string = 'htf0214021@163.com';
$encrypt = new Encrypter($iv, $key);

$encrypt_string = $encrypt->encrypt($string);

$decrypt_string = $encrypt->decrypt($encrypt_string);

var_dump($encrypt_string, $decrypt_string);
die;