<?php
require 'vendor/autoload.php';
require 'GoutteWrapper.php';

$GoutteWrapper = new GoutteWrapper();

try {
	$title = $GoutteWrapper->getTitle();
	$image = $GoutteWrapper->getMetaImage();
} catch (Exception $e) {
	$title = 'error';
	$image = null;
}

echo $title;
if (!empty($image)) {
	echo "<br><img src='{$image}' alt='{$title}'>";
}