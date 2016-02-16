<?php
class RandomCode
{
	private static $randomData = array(
		'all'  => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
		'str'  => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		'strL' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
		'strS' => 'abcdefghijklmnopqrstuvwxyz',
		'num'  => '0123456789',
	);

	private static $type   = 'all';

	public static function get($len, $len2)
	{
		$result = '';

		$len = (!empty($len) && $len > 0) ? intval($len) : 6;
		$len = (!empty($len2) && $len < $len2) ? mt_rand($len , $len2) : $len;

		$data = self::$randomData[self::$type];

		$arr = preg_split("//" , $data);
		$arr = array_filter($arr , 'strlen');
		$arr = array_values($arr);

		$strCnt = count($arr) - 1;

		for ($i = 0; $i < $len; $i++) {
			$result = "{$result}{$arr[mt_rand(0,$strCnt)]}";
		}
		return $result;
	}

	public static function set($type)
	{
		self::$type = (!empty(self::$randomData[$type])) ? $type : 'all';
	}
}