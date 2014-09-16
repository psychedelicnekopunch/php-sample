<?php
class ClassAutoLoader
{
	private static $dirs = array();

	public function __construct()
	{
		spl_autoload_register(array($this, 'loader'));
	}

	public function register()
	{
		self::$dirs = array(
			__DIR__ . '/controllers/',
			__DIR__ . '/models/',
		);
	}

	public static function loader($classname)
	{
		foreach (self::$dirs as $dir) {
			$file = "{$dir}{$classname}.php";
			if (is_readable($file)) {
				require_once $file;
				return;
			}
		}
	}
}
$ClassAutoLoader = new ClassAutoLoader();
$ClassAutoLoader->register();