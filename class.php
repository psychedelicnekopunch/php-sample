<?php


class Test
{
	private $privateId = null;

	public  $publicId  = null;

	public static $staticId  = null;

	public function __construct($id = 0)
	{
		$this->privateId = (!empty($id)) ? $id : 0;
		$this->publicId  = (!empty($id)) ? $id : 0;
		self::$staticId  = (!empty($id)) ? $id : 0;
	}

	public function getPrivateId()
	{
		return $this->privateId;
	}

	public function countUp()
	{
		$this->privateId++;
		$this->publicId++;
		self::$staticId++;
	}

	public function funcTest()
	{
		function getId($self)
		{
			return $self->getPrivateId();
		}
		return getId($this);
	}
}

$test  = new Test;
$test2 = new Test;

$test->countUp();
$test->countUp();
$test2->countUp();
$test2->countUp();

var_dump($test->getPrivateId(), Test::$staticId);

var_dump($test->funcTest());


?>