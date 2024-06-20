<?php


class Singleton
{

	public $test = null;

	private $lists = [];


	final protected function __construct() {}

	final public static function sharedInstance()
	{
		static $instance;

		if (!$instance) {
			$instance = new static;
		}
		// if (count($instance->lists) == 0) {
			if ($instance->test) {
				$instance->lists[] = $instance->test;
			}
		// }
		return $instance;
	}


	public function getList()
	{
		return $this->lists;
	}

}


var_dump(Singleton::sharedInstance()->getList());
var_dump(Singleton::sharedInstance()->test = 'sample');
var_dump(Singleton::sharedInstance()->test = 'sample2');
var_dump(Singleton::sharedInstance()->getList());
?>