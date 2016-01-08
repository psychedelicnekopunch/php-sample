<?php

class Calendar
{
	private static $year;

	private static $month;

	private static $today;

	private static $daytime;

	private static function init()
	{
		$time = time();

		self::$year  = (self::$year) ? self::$year : intval(date('Y', $time));
		self::$month = (self::$month) ? self::$month : intval(date('m', $time));
		self::$today = (self::$today) ? self::$today : intval(strtotime(date('Y/m/d ', $time) . '00:00:00'));

		self::$daytime = 60*60*24;
	}

	public static function get()
	{
		self::init();

		$res = [];

		$firstDayTime = self::getFirstDayTime();
		$firstDayDate = self::build($firstDayTime);

		$start = $firstDayTime - (self::$daytime * $firstDayDate['wday']);

		$days = 0;

		while (true) {
			$calendar = self::build($start + (self::$daytime * $days));

			if ($days === 28 || $days === 35) {
				if ($res[$days - 1]['mon'] !== $calendar['mon']) {
					break;
				}
			} else if ($days === 42) {
				break;
			}

			$res[] = $calendar;
			$days++;
		}

		return $res;
	}

	private static function build($unixtime)
	{
		$date = getdate($unixtime);

		return [
			'unixtime' => $unixtime,
			'wday'     => $date['wday'],
			'year'     => $date['year'],
			'mon'      => $date['mon'],
			'mday'     => $date['mday'],
			'today'    => (self::$today === $unixtime) ? true : false,
		];
	}

	public static function set($arr = [])
	{
		foreach ($arr as $key => $val) {
			if ($key === 'year') {
				self::$year = $val;
			} else if ($key === 'mon') {
				self::$month = $val;
			}
		}
	}

	private static function getFirstDayTime()
	{
		return mktime(0, 0, 0, self::$month, 1, self::$year);
	}
}

var_dump(Calendar::get());