<?php


class Sample
{
	// public $vars = (object) [
	// 	'test' => '',
	// 	'i' => 0,
	// ];


	public $vars = [
		'test' => '',
		'i' => 0,
	];


	public function __construct()
	{
		$this->vars = (object) $this->vars;
	}

}

$sample = new Sample;
var_dump($sample);

?>