<?php

class RandomCode
{
	private static $randoms = array(
		'all'  => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
		'str'  => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		'strL' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
		'strS' => 'abcdefghijklmnopqrstuvwxyz',
		'int'  => '0123456789',
	);

	/**
	 * ランダムな文字列を取得する
	 *
	 * @param int min 最小文字数
	 * @param int max 最大文字数
	 * @param string type [all, str, strS, strL, int]
	 * @return string
	 */
	public static function get($min, $max, $type = null)
	{
		$result = '';

		$min = (!empty($min) && $min > 0) ? intval($min) : 6;
		$cnt = (!empty($max) && $min < $max) ? mt_rand($min , $max) : $min;

		$type = (!empty(self::$randoms[$type])) ? $type : 'all';

		$randoms = preg_split("//" , self::$randoms[$type]);
		$randoms = array_filter($randoms , 'strlen');
		$randoms = array_values($randoms);

		$randomCnt = count($randoms) - 1;

		for ($i = 0; $i < $cnt; $i++) {
			$result = "{$result}{$randoms[mt_rand(0, $randomCnt)]}";
		}
		return $result;
	}
}