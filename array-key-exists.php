<?php

$params1 = [
	'key1' => 'value',
	'key2' => null,
];

$params2 = ['value', null];

var_dump($params1);

echo "\n====== array_key_exists ======\n";
var_dump(array_key_exists('key1', $params1));
var_dump(array_key_exists('key2', $params1));
var_dump(array_key_exists('key3', $params1));

echo "\n====== isset ======\n";
var_dump(isset($params1['key1']));
var_dump(isset($params1['key2']));
var_dump(isset($params1['key3']));

echo "\n============\n";

var_dump($params2);

echo "\n====== array_key_exists ======\n";
var_dump(array_key_exists(0, $params2));
var_dump(array_key_exists(1, $params2));
var_dump(array_key_exists(2, $params2));

echo "\n====== isset ======\n";
var_dump(isset($params2[0]));
var_dump(isset($params2[1]));
var_dump(isset($params2[2]));
?>