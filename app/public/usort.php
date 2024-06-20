<?php

class ArraySortBuilder
{
	/**
	 * 指定したキーでソートする
	 *
	 * @param array $arr ソートしたい配列
	 * @param string|array $key ソートの基準となるキー名。arrayの場合は ['ソート優先1', 'ソート優先2', 'ソート優先3'...] となる
	 * @return array $arr
	 */
	public static function usort($arr, $key)
	{
		if (!is_array($arr)) {
			return null;
		}
		if (empty($arr)) {
			return $arr;
		}
		if (empty($key)) {
			return $arr;
		}
		usort($arr , self::buildSort($key));
		return $arr;
	}

	private static function buildSort($key)
	{
		// strnatcmp(a, b) について。
		// a が b より大きい場合は 1、
		// a と b が等しい場合は 0、
		// a が b より小さい場合は -1 になる。
		if (is_array($key)) {
			return function ($a, $b) use ($key) {
				foreach ($key as $value) {
					if (strnatcmp($a[$value], $b[$value]) === 0) {
						continue;
					}
					return strnatcmp($a[$value], $b[$value]);
				}
			};
		} else {
			return function ($a, $b) use ($key) {
				return strnatcmp($a[$key], $b[$key]);
			};
		}
	}
}


$arr = [
	['a' => 5, 'b' => 0],
	['a' => 3, 'b' => 2],
	['a' => 0, 'b' => 3],
	['a' => 0, 'b' => 1],
	['a' => 0, 'b' => 2],
	['a' => 1, 'b' => 2],
	['a' => 1, 'b' => 0],
];

$a = ArraySortBuilder::usort($arr, 'a');
// var_dump($a);
var_dump(ArraySortBuilder::usort($a, 'b'));


?>