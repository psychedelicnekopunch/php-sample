<?php

class Calendar
{
	private $year;

	private $month;

	private $today;

	public function __construct($arr = [])
	{
		$time = time();

		$this->set($arr);

		$this->year  = ($this->year)  ? $this->year  : intval(date('Y', $time));
		$this->month = ($this->month) ? $this->month : intval(date('m', $time));
		$this->today = ($this->today) ? $this->today : intval(strtotime(date('Y/m/d ', $time) . '00:00:00'));
	}

	public function get()
	{
		$res = [];

		$daytime = 60*60*24;

		$firstDayTime = mktime(0, 0, 0, $this->month, 1, $this->year);
		$firstDayDate = $this->build($firstDayTime);

		$start = $firstDayTime - ($daytime * $firstDayDate['wday']);

		$days = 0;

		while (true) {
			$calendar = $this->build($start + ($daytime * $days));

			if ($days === 28 || $days === 35) {
				if ($res[$days - 1]['month'] !== $calendar['month']) {
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

	public function set($arr = [])
	{
		foreach ($arr as $key => $val) {
			if ($key === 'year') {
				$this->year = $val;
			} else if ($key === 'month') {
				$this->month = $val;
			}
		}
	}

	private function build($unixtime)
	{
		$date = getdate($unixtime);

		return [
			'unixtime' => $unixtime,
			'wday'     => $date['wday'],
			'year'     => $date['year'],
			'month'    => $date['mon'],
			'day'      => $date['mday'],
			'isToday'  => ($this->today === $unixtime) ? true : false,
		];
	}
}

$calendar = new Calendar();
var_dump($calendar->get());