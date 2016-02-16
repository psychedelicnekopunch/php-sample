<?php

class ClientChecker
{
	public static function getIpAddress()
	{
		$ip = array();

		if (!empty($_SERVER['HTTP_SP_HOST'])) {
			if (preg_match("/^\d+(?:\.\d+){3}$/D", $_SERVER['HTTP_SP_HOST'])) {
				$ip[] = $_SERVER['HTTP_SP_HOST'];
			}
		}
		if (!empty($_SERVER['HTTP_VIA'])) {
			if (preg_match("/.*\s(\d+(?:\.\d+){3})/", $_SERVER['HTTP_VIA'], $match)) {
				$ip[] = $match[1];
			}
		}
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			if (preg_match("/^\d+(?:\.\d+){3}/", $_SERVER['HTTP_CLIENT_IP'], $match)) {
				$ip[] = $match[0];
			}
			if (preg_match("/^([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})/i", $_SERVER['HTTP_CLIENT_IP'], $match)) {
				$ip[] = implode(".", array(hexdec($match[1]), hexdec($match[2]), hexdec($match[3]), hexdec($match[4])));
			}
		}
		if (!empty($_SERVER['HTTP_FORWARDED'])) {
			if (preg_match("/.*\s(\d+(?:\.\d+){3})/", $_SERVER['HTTP_FORWARDED'], $match)) {
				$ip[] = $match[1];
			}
		}
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			if (preg_match("/^\d+(?:\.\d+){3}/", $_SERVER['HTTP_X_FORWARDED_FOR'], $match)) {
				$ip[] = $match[0];
			}
		}
		if (!empty($_SERVER['HTTP_FROM'])) {
			if (preg_match("/^\d+(?:\.\d+){3}$/D", $_SERVER['HTTP_FROM'])) {
				$ip[] = $_SERVER['HTTP_FROM'];
			}
		}
		//var_dump($ip);
		$addr = '';
		foreach ($ip as $val) {
			if (!preg_match("/^(?:10|172\.16|192\.168|127\.0|0\.|169\.254)\./", $val) and $addr = $value) break;
		}

		$result = $addr ? $addr : $_SERVER['REMOTE_ADDR'];
		return $result;
	}

	public static function getHostName()
	{
		$ip = self::getIpAddress();

		if (!empty($ip)) {
			$host = gethostbyaddr($ip);
			if (empty($host)) {
				$host = isset($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : '';
			}
			return ($host ? $host : $ip);
		} else {
			return "can't get Your IP Address.";
		}
	}

	public static function getHua()
	{
		$hua = $_SERVER['HTTP_USER_AGENT'];
		$hua = str_replace(' ', '', $hua);
		return $hua;
	}

	public static function getUaData($type)
	{
		$result = 'etc';
		$hua = $_SERVER['HTTP_USER_AGENT'];

		$uaArr = array(
			'pc' => array(
				'Windows',
				'Macintosh',
				'Linux',
			),
			'mobile' => array(
				'iPhone',
				'iPad',
				'iPod',
				'Android',
			),
			'browser' => array(
				'Safari',
				'FireFox',
				'Chrome',
				'Opera',
				'IE',
			)
		);

		if (empty($uaArr[$type])) {
			throw new Exception('type must be [pc, mobile, browser]', 400);
		}

		foreach ($uaArr[$type] as $val) {
			if (preg_match("/{$val}/i", $hua) > 0) {
				$result = $val;
			}
		}

		return $result;
	}
}