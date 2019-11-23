<?php


function test() {
	try {
		throw new Exception("Error Processing Request", 400);
		test2();
		try {
			echo "1\n";
			return 'successA';
		} catch (Exception $e) {
			echo "2\n";
			return 'failedA';
		}
		echo "3\n";
		return 'testA';
	} catch (Exception $e) {
		test3();
		try {
			echo "4\n";
			return $e->getMessage();
		} catch (Exception $e) {
			echo "5\n";
			return 'failedB';
		}
		echo "6\n";
		return 'failedC';
	}
}

function test2() {
	try {
		echo "7\n";
		return 'successB';
	} catch (Exception $e) {
		echo "8\n";
		return 'failedD';
	}
	echo "9\n";
	return 'testB';
}

function test3() {
	try {
		echo "10\n";
		return 'successC';
	} catch (Exception $e) {
		echo "11\n";
		return 'failedE';
	}
	echo "12\n";
	return 'testC';
}

echo test()

?>