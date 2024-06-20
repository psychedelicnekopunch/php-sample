<?php

var_dump(is_int('1'));
var_dump(is_int(1));


var_dump(intval('1'));
var_dump(intval(''));
var_dump(intval('0'));
var_dump(intval(null));

var_dump(empty([]));

$int1 = '0';
$int2 = 0;
$int3 = null;
var_dump(!$int1);
var_dump(!$int2);
var_dump(!$int3);
?>
