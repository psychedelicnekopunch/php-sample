<?php

use Goutte\Client as Client;

class GoutteWrapper
{
	private static $url = 'https://github.com/masa69/PhpClassSample';

	private static $client = null;

	private static function initClient()
	{
		if (self::$client === null) {
			self::$client = new Client();
		}
	}

	public function getTitle()
	{
		self::initClient();
		//$client->getClient()->setDefaultOption('config/curl/'.CURLOPT_TIMEOUT, 60);
		$crawler = self::$client->request('GET', self::$url);
		/*$crawler->filter('title')->each(function ($node) {
			echo $node->text();
		});*/
		return $crawler->filter('title')->text();
	}

	public function getMetaImage()
	{
		self::initClient();
		$crawler = self::$client->request('GET', self::$url);
		return $crawler->filter('meta[property="og:image"]')->attr('content');
	}
}