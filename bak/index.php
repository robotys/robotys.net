<?php
	require_once('core/functions.php');

	// develop core routes here, then move it to more sensible places

	// 

	// require index
	if(array_key_exists('search', $_GET) !== FALSE){
		require('themes/'.$config->theme.'/search.php');

	}elseif(array_key_exists('subscribe', $_GET) !== FALSE){

		require('themes/'.$config->theme.'/thankyou.php');

	}elseif(array_key_exists('read', $_GET) !== FALSE){

		require('themes/'.$config->theme.'/single.php');

	}else{
		
		require('themes/'.$config->theme.'/index.php');

	}
?>