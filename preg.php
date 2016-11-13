<?php

$val = '#fbF';
var_dump(preg_match('/^#[0-9a-f]{3}?$/i', $val));
var_dump(preg_match('/^#[0-9a-f]{6}?$/i', $val));


$test = 'tes';
var_dump(preg_match("/^$test$/i", null));


$test2 = 123;
$test2 = '123';
$test2 = 12.3;
$test2 = '12.3';
var_dump(preg_match('/^[1-9]+[0-9.]+[0-9]+$/i', $test2));
var_dump(preg_match('/^[1-9]+[0-9.]*[0-9]+$/i', $test2));
var_dump(preg_match('/^[0-9]+$/i', $test2));


$mail = 'sample-mail_addrees.yeah@i.softbank.jp';
var_dump(preg_match('/^[0-9a-z-._]+@[0-9a-z-._]+[0-9a-z]+$/i', $mail));
?>