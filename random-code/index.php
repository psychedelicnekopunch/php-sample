<?php
$len  = (!empty($_GET['len']))  ? intval($_GET['len'])  : null;
$len2 = (!empty($_GET['len2'])) ? intval($_GET['len2']) : null;
$type = (!empty($_GET['type'])) ? htmlspecialchars($_GET['type'] , ENT_QUOTES) : null;

include 'RandomCode.php';

echo RandomCode::get($len, $len2, $type);