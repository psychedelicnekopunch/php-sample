<?php
// int(35400) 18:50
var_dump(mktime(18,50,0,1,1,1970));
// int(39000) 19:50
var_dump(mktime(19,50,0,1,1,1970));
// int(42600) 20:50
var_dump(mktime(20,50,0,1,1,1970));
// int(40800) 20:20
var_dump(mktime(20,20,0,1,1,1970));
// var_dump(getdate(time()));

$timeArr = getdate(time());
var_dump(mktime($timeArr['hours'],$timeArr['minutes'],0,1,1,1970));
var_dump(time());

var_dump($timeArr['wday']);
/*
array(11) {
  ["seconds"]=>
  int(39)
  ["minutes"]=>
  int(54)
  ["hours"]=>
  int(16)
  ["mday"]=>
  int(24)
  ["wday"]=>
  int(4)
  ["mon"]=>
  int(9)
  ["year"]=>
  int(2015)
  ["yday"]=>
  int(266)
  ["weekday"]=>
  string(8) "Thursday"
  ["month"]=>
  string(9) "September"
  [0]=>
  int(1443081279)
}
*/