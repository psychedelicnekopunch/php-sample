<?php

$lists = [
	'',
	'0',
	0,
	null,
	'null',
	[],
	(object) [],
];

echo <<< EOT
if (empty(value)) {
  -> true
}


EOT;

foreach ($lists as $value) {
	var_dump($value);
	if (empty($value)) {
		echo "is true\n\n";
	} else {
		echo "is false\n\n";
	}
}
?>