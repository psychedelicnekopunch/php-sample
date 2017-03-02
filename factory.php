<?php

class FactorySample
{
	public static function create($type = null, $params = [])
	{
		switch ($type) {
			case 'japanese':
				return Japanese::connect($params);
			default:
				throw new Exception('invalid', 400);
				return null;
		}
	}
}


class Japanese
{
	public static function connect($params)
	{
		$pref = (!empty($params['pref'])) ? $params['pref'] : null;
		switch ($pref) {
			case 'tokyo':
				return self::connectTokyo($params);
			default:
				throw new Exception('invalid', 400);
				return null;
		}
	}

	public static function connectTokyo($params)
	{
		return new JapaneseTokyo($params);
	}
}


class JapaneseTokyo
{
	public function __construct($params = [])
	{

	}

	public function thanks()
	{
		return 'ありがとうございます';
	}
}

$tokyo = FactorySample::create('japanese', [
	'pref' => 'tokyo',
]);

var_dump($tokyo);
var_dump($tokyo->thanks());

var_dump(FactorySample::create('japanese', [
	'pref' => 'tokyo',
])->thanks());
?>