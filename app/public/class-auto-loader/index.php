<?php
include __DIR__ . '/ClassAutoLoader.php';
$IndexController = new IndexController();
echo $IndexController->indexAction();