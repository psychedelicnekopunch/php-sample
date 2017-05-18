<?php

function check($boolean) {
	switch ($boolean) {
		case true:
			echo "true \n";
			break;
		case false:
			echo "false \n";
			break;
		default:
			echo "invalid \n";
			break;
	}
}

check(true);
check(false);
check(null);
check(0);
check(1);
check('0');
check('1');
check('test');
?>