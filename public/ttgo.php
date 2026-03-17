<?php

function dd($var)
{
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

$username = '@elrahexclusivedamansara';

$url = 'https://www.tiktok.com/api/user/detail/?uniqueId='.$username;

dd(file_get_contents($url));