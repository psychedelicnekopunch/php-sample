<?php

$value = ' a b c d e f g ';
var_dump($value);

$value = str_replace(' ', '', $value);
$value = str_replace('　', '', $value);
var_dump($value);

?>
