<?php

$val = '#fbF';
var_dump(preg_match('/^#[0-9a-f]{3}?$/i', $val));
var_dump(preg_match('/^#[0-9a-f]{6}?$/i', $val));


$test = 'tes';

var_dump(preg_match("/^$test$/i", null));
?>