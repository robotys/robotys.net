<?php

	dd($_GET['domain']);

	$url = 'https://api.namecheap.com/xml.response?ApiUser=robotys&ApiKey=b4c9fde001124b768a946935f657d4c8&UserName=robotys&Command=namecheap.domains.check&ClientIp=192.168.1.109&DomainList='.$_GET['domain'];

	$res = file_get_contents($url);

	$xml = simplexml_load_string($res);
	$check = ($xml->CommandResponse->DomainCheckResult);

	$dom = (object)[
		'domain' => (string)$check['Domain'],
		'available' => (string) $check['Available'],
		'is_premium' => (string) $check['IsPremiumName'],
		'prem_reg_price' => (float)$check['PremiumRegistrationPrice'],
		'prem_ren_price' => (float)$check['PremiumRenewalPrice'],
		'price' => 0,
	];

	if($dom->is_premium == 'false')
	{
		// get current .com price
		// $url = 'https://api.namecheap.com/xml.response?ApiUser=robotys&ApiKey=b4c9fde001124b768a946935f657d4c8&UserName=robotys&Command=namecheap.users.getPricing&ProductType=DOMAIN&ClientIp=192.168.1.109';

		// $res = file_get_contents($url);
		// dd($res);
		// $xml = simplexml_load_string($res);

		// dd($xml);
		$dom->price = 10.28;
	}
	else
	{
		$dom->price = $dom->prem_reg_price;
	}

	$res = [
		'status' => true,
		'message' => 'success',
		'data' => $dom
	];


echo json_encode($res);

function dd($var)
{
	echo '<pre>';
	if(is_bool($var)) print_r($var);
	else var_dump($var);
	echo '</pre>';
	exit();
}