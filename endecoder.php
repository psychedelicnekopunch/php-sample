<?php

$value = 'test';

class Endecoder
{

	public static function encode($string)
	{
		$res = base64_encode($string);

		echo "{$string} -> {$res}\n";
		return $res;
	}

	public static function decode($string)
	{
		$res = base64_decode($string);
		echo "{$string} -> {$res}\n";
	}

}

Endecoder::decode(Endecoder::encode('test1.?;/'));

?>