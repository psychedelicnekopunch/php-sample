<?php

class a8
{

	private $htmls = [];

	private $amps = [];


	final protected function __construct() {}

	final public static function sharedInstance()
	{
		static $instance;

		if (!$instance) {
			$instance = new static;
		}
		return $instance;
	}


	public function setHtml($priority, $html)
	{
		if (!$this->isValidPriority($priority)) {
			throw new Exception("priority must be 1 to 5", 400);
		}
		$this->htmls[] = [
			'priority' => $priority,
			'code' => $html,
		];
	}


	public function setAmp($priority, $amp)
	{
		if (!$this->isValidPriority($priority)) {
			throw new Exception("priority must be 1 to 5", 400);
		}
		$this->amps[] = [
			'priority' => $priority,
			'code' => $amp,
		];
	}


	public function getHtmls($count)
	{
		return $this->getList($count, $this->htmls);
	}


	public function getAmps($count)
	{
		return $this->getList($count, $this->amps);
	}


	private function getList($count, $lists)
	{
		$res = [];

		$cnt = count($lists);

		if ($cnt == 0) {
			return [];
		}

		$length = min($cnt, $count);

		while ($length > 0) {

			$i = mt_rand(0, $cnt - 1);

			if ($lists[$i]['priority'] >= 6) {
				continue;
			}
			if (++$lists[$i]['priority'] > 5) {
				$length--;
				$res[] = $lists[$i]['code'];
			}
		}

		return $res;
	}


	// 5 higher >>>> 1 lower
	private function isValidPriority($priority)
	{
		return (1 <= $priority && $priority <= 5) ? true : false;
	}

}


try {
	a8::sharedInstance()->setHtml(5, '
	<div>
		test1
	</div>
	');

	a8::sharedInstance()->setHtml(3, '
	<div>
		test2
	</div>
	');

	a8::sharedInstance()->setHtml(3, '
	<div>
		test3
	</div>
	');

	a8::sharedInstance()->setHtml(1, '
	<div>
		test4
	</div>
	');

	a8::sharedInstance()->setHtml(5, '
	<div>
		test5
	</div>
	');

	var_dump(a8::sharedInstance()->getHtmls(3));
	var_dump(a8::sharedInstance()->getHtmls(10));
	var_dump(a8::sharedInstance()->getAmps(10));
} catch (Exception $e) {
	echo $e->getMessage() . "\n";
}
