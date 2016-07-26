<?php
$value  = 'test';
$value2 = 'あいうえお';
$value3 = '123456';

var_dump(count($value));
var_dump(count($value2));
var_dump(count($value3));

var_dump(strlen($value));
var_dump(strlen($value2));
var_dump(strlen($value3));

var_dump(mb_strlen($value));
var_dump(mb_strlen($value2));
var_dump(mb_strlen($value3));
?>