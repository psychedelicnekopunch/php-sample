<?php

class AppVersion
{

	private $version = '1.1.10';


	function __construct()
	{

	}


	/**
	 * アプリのバージョンチェック
	 *
	 * @return array(key => value)
	 */
	public function check($version)
	{
		$userVer = $this->toArray($version);
		$ourVer = $this->toArray($this->version);

		if ($ourVer['major'] > $userVer['major']) {
			return false;
		}
		if ($ourVer['major'] === $userVer['major']) {
			if ($ourVer['minor'] > $userVer['minor']) {
				return false;
			}
			if ($ourVer['minor'] === $userVer['minor']) {
				return ($ourVer['fix'] > $userVer['fix']) ? false : true;
			}
			return true;

		}
		return true;
	}


	private function toArray($version)
	{
		$res = [
			'major' => 0,
			'minor' => 0,
			'fix' => 0,
		];

		$versions = explode('.', $version);

		if (count($versions) !== 3) {
			return $res;
		}

		return [
			'major' => (int) $versions[0],
			'minor' => (int) $versions[1],
			'fix' => (int) $versions[2],
		];
	}

}

$appVersion = new AppVersion();
var_dump($appVersion->check('1.2.1'));
