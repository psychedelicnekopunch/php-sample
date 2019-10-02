<?php


class Sample
{
	private $test = '';


	public function __construct()
	{

	}


	public function __get($name) {
		return $this->$name;
	}


	public function __set($name, $value) {
		return $this->$name = $value;
	}

}

$sample = new Sample;
var_dump($sample->test);

$sample->test = 'test';
var_dump($sample->test);
?>