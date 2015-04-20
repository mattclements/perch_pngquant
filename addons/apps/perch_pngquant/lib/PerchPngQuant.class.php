<?php

class PerchPngQuant
{
	private static $table = 'kraken_jobs';

	public static function on_create($Event)
	{
		$Asset = $Event->subject;

		file_put_contents('./debug.txt', $Asset);

	}

	public static function download_file($url, $target) 
	{
		PerchUtil::debug('Downloading file.');
		PerchUtil::debug($url);
		PerchUtil::debug($target);
		$ch = curl_init();
		$timeout = 30;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		
		if ($data) {
			PerchUtil::debug('We have data, writing file');
			file_put_contents($target, $data);
		}
	}

}
