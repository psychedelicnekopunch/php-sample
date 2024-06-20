<?php

$params = [null, -1, 0, '', 'てすと0', 'てすと1', '-1', '0', '1', '-１', '０', '１'];

foreach ($params as $param) {
	var_dump((int) mb_convert_kana($param, 'as'));
}

echo "\n==========================\n\n";

foreach ($params as $param) {
	var_dump((int) $param);
}

echo "\n==========================\n\n";

foreach ($params as $param) {
	var_dump((string) mb_convert_kana($param, 'HVs'));
}

echo "\n==========================\n\n";

foreach ($params as $param) {
	var_dump((string) $param);
}
?>