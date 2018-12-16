<!DOCTYPE html>
<html>
<head>
	<title><?= $config->title; ?></title>
	<meta name="description" value="<?= $config->social_description?>"/>
	<link href="<?= theme_dir('assets/style.css')?>" type="text/css" rel="stylesheet" />
	<style>
		body{
			background: #fefefe;
			font-family: serif;
			color: #444;
		}

		.menu{
			width: 300px;
			float: left;
			font-family: sans-serif;
			font-size: 0.8em;
			padding: 30px;
			line-height: 1.5em;
		}

		.menu input[type=text]{
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
			border: 1px solid #bbb;
			padding: 6px 10px;
			background: #fff;
		}

		.menu input[type=submit]{
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			border: 1px solid #bbb;
			padding: 6px 10px;
			margin-left: -1px;
		}

		.content{
			width: 500px;
			float: left;
			padding: 30px;
			font-size: 1.3em;
			padding-left: 60px;
			line-height: 1.5em;
			color: #888;
		}

		.content h1{
			font-size: 1.4em;
			line-height: 1em;
			color: #444;
		}

		.content img{
			max-width: 100%;
		}

		a{
			text-decoration: none;
			transition: all 0.5s;
		}

		.menu h1 a, .content h1 a, .ender a{
			color: #444;
			/*text-decoration: none;*/
		}

		.menu h1 a:hover, .content h1 a:hover{
			text-decoration: underline;
		}

		.ender{
			font-size: 0.8em;
			border-top: 1px #444 solid;
			padding-top: 0px;
			margin-top: 90px;
		}

		.post{
			margin-bottom: 90px;
		}

		h1, h2, h3{
			font-family: sans-serif;
			font-weight: 800;
		}

		.pagination{
			padding: 0px;
			margin: 0px;
			text-align: center;
		}

		.pagination li{
			display: inline-block;
		}

		.pagination li a{
			border: #bbb 1px solid;
			margin: 2px;
			padding: 6px 10px;
			font-size: 0.7em;
			font-family: sans-serif;
			color: #444;
			border-radius: 5px;
		}

		.pagination li a:hover, .pagination li a.active{
			background: #444;
			border-color: #444;
			color: #fff;
		}

		code{
			color: #000;
		}

		pre{
			max-width: 100%;
			background: #444;
			padding: 15px;
			white-space: pre-wrap;
			font-size: 0.9em;
			line-height: 1.5em;
		}

		pre > code{
			color: #0F0;
		}
	</style>
</head>
<body>

<div class="menu">

	<img src="<?= $config->logo ?>" style="width: 50px; margin-bottom: -10px;"/>
	<h1><a href="/"><?= $config->name;?></a></h1>
	<p><?= $config->social_description?></p>
	
	<form action="/">
		<?php
			$search = '';
			if(array_key_exists('search', $_GET) !== false) $search = $_GET['search'];
		?>
		<input type="text" name="search" placeholder="keyword" value="<?= $search; ?>"/><input type="submit" value="search">
	</form>
	<!-- <br/>
	<form action="/">
		<input type="text" name="subscribe" placeholder="your@email.com"><input type="submit" value="subscribe">
	</form> -->

	<p><small>All Rights Reserved <a href="/"><?= $_SERVER['HTTP_HOST']?></a> &copy; <?= date('Y')?></small></p>
</div>

<div class="content">