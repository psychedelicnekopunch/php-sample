<?php
require 'ClientChecker.php';
echo ClientChecker::getIpAddress() . '<br>';
echo ClientChecker::getHostName() . '<br>';
echo ClientChecker::getHua() . '<br>';
echo ClientChecker::getUaData('browser') . '<br>';
echo ClientChecker::getUaData('pc') . '<br>';
echo ClientChecker::getUaData('mobile') . '<br>';