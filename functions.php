<?php

function view($path, $data = null, $return = false)
{
	$path = trim($path, '/');

	if(strpos($path, '..') == FALSE) $path = '../'.$path;
	if(strpos($path, '.php') == FALSE) $path = $path.'.php';

	require($path);
	exit();
}

function canAdmin()
{
	return (env('access') != 'production');
}

function error403()
{
	header('HTTP/1.0 403 Forbidden');
	require('../themes/'.env('themes').'/403.php');
	exit();
}

function error404()
{
	header('HTTP/1.0 404 Not Found');
	require('../themes/'.env('themes').'/404.php');
	exit();
}

function isAdmin($route)
{
	if(strpos($route, '/') == false) return ($route == 'admin');
	else return strpos($route, 'admin/') !== FALSE;
}

function inputPost($key = null)
{

}

function inputGet($key = null)
{

}

function getRoute()
{
	$uri = $_SERVER['REQUEST_URI'];

	if($uri == '/') return 'index';
	else return trim($uri,'/');
}

function env($key)
{
	if(array_key_exists($key, $_ENV) == FALSE) return null;
	else return $_ENV[$key];
}

function dd($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	exit();
}