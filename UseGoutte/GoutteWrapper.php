<?php

use Goutte\Client as Client;

class GoutteWrapper
{
	public function getTitle()
	{
		$client = new Client();
		$url = 'https://github.com/masa69/PhpClassSample';
		$url = 'http://stackoverflow.com/questions/9922562/how-to-resolve-curl-error-7-couldnt-connect-to-host';
		$url = 'http://private.local.ma/';
		$url = 'http://hogehoge';
		$url = 'http://www.amazon.co.jp/%E3%82%A2%E3%82%A4%E3%82%B3-%E5%8B%87%E8%80%85%E3%81%AE%E5%89%A3/dp/B004W1HNZI/ref=sr_1_1?ie=UTF8&qid=1393152003&sr=8-1&keywords=%E5%8B%87%E8%80%85%E3%81%AE%E5%89%A3';
		//$client->getClient()->setDefaultOption('config/curl/'.CURLOPT_TIMEOUT, 60);
		$crawler = $client->request('GET', $url);
		/*$crawler->filter('title')->each(function ($node) {
			echo $node->text();
		});*/
		return $crawler->filter('title')->text();
	}
}