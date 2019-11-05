<?php
var_dump(date_default_timezone_get());
var_dump(date('Y-m-d H:i:s'));

date_default_timezone_set('Asia/Tokyo');
var_dump(date_default_timezone_get());

var_dump(date('Y-m-d H:i:s'));
?>