<?php

namespace System;

class App
{
	function run()
	{
		$route = getRoute();

		if(isAdmin($route))
		{

			if(canAdmin())
			{
				$method = str_replace('admin/', '', $route);

				if($method == 'admin') $method = 'index';

				$this->$method();
			}
			else
			{
				error403();
			}
			
		}
		else
		{
			$filename = $route.'.php';

			$viewPath = '../themes/'.env('themes').'/'.$filename;

			if(is_file($viewPath))
			{
				require($viewPath);
				exit();
			}
			else
			{
				error404();
			}
		}

		// teardown everything
		exit();
	}

	function index()
	{
		// show admin dashboard
		view('admin/index');
	}

	function editor()
	{
		view('admin/editor');
	}

	function analytics()
	{
		view('admin/analytics');
	}

	function subscriber()
	{
		view('admin/subscriber');
	}
}