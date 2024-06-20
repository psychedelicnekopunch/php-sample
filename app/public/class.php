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

class Child extends Test
{
	public function __construct($id)
	{
		parent::__construct($id);
	}

	public function outputPublicId()
	{
		// ERROR: $publicId is not static
		// $parent = parent::$publicId;
		// echo "from parent: {$parent}\n";

		// $this->publicId is working
		echo "from this: {$this->publicId}\n";
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

$child = new Child(10);
$child->outputPublicId();
?>