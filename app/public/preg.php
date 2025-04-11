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




$links = [
	'http://test-sample.com/ TEST',
	'http://test.sample.co.jp/ls_rar/ TEST',
	'https://youtu.be/sample TEST',
	'http://www.sample.co.jp/te/s/t7720/ TEST',
	'http://lyricalschool.com/ TEST',
	'http://test-sample.com TEST',
	'http://test.sample.co.jp/ls_rar ',
	'https://youtu.be/sample ',
	'http://www.sample.co.jp/te/s/t7720 ',
	'http://sample.com',
	'http://日本語.com',
	'http://日本語.com?test=sample&ja=日本',
];

// $ptn = "/(http|https):\/\/[a-z]+[a-z.-]*[a-z]+\.[a-z]+[a-z0-9.-_\/]*(\s|\n|[a-z0-9\/]+$)/i";
$ptn = "/(http|https):\/\/[\S]+(\s|\n|[\S]+$)/i";

foreach ($links as $link) {
	echo (preg_match($ptn, $link, $linky)) ? "$linky[0]\n" : "ERROR: {$link}\n";
}

?>
