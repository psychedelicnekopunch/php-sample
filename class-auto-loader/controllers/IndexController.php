<?php
class IndexController
{
	public function indexAction()
	{
		return Test::get();
	}
}