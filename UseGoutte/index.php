<?php
require 'vendor/autoload.php';
require 'GoutteWrapper.php';

$GoutteWrapper = new GoutteWrapper();

try {
	echo $GoutteWrapper->getTitle();
} catch (Exception $e) {
	echo 'error';
}