<?php

$value = 'test';

function test()
{
	// ERROR: Notice
	var_dump($value);
}

// test();


function test2($prefix, $val)
{
	return "{$prefix}_{$val}\n";
}

echo test2('test2', $value);


function test3($val)
{
	return test2('test3', $val);
}

// echo test3($value);


function test4()
{
	function innerFunc($val, $x, $y)
	{
		return test2($val, $x + $y);
	}

	return innerFunc('test4', 1, 2);
}

// echo test4();


function test5()
{
	return innerFunc('test5', 10, 101);
}

echo test5();
?>