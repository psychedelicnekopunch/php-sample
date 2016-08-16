<?php
echo "---------------\n";

var_dump(1.1);
var_dump('1.1');
var_dump((float) '1.1');
var_dump((int) '1.1');

echo "---------------\n";

var_dump(-2.2);
var_dump('-2.2');
var_dump((float) '-2.2');
var_dump((int) '-2.2');

echo "---------------\n";

var_dump([]);
var_dump((object) []);

echo "---------------\n";

var_dump(new stdClass);
var_dump((array) new stdClass);

echo "---------------\n";

var_dump((float) null);
var_dump((int) null);
var_dump((string) null);
var_dump((boolean) null);
var_dump((array) null);
var_dump((object) null);

echo "---------------\n";
?>
