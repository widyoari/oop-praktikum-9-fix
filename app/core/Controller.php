<?php

namespace App\Core;

class Controller
{
	// Layout webboard
	public function webboard($view, $data = [], $rows_mhsw)
	{
		require_once ROOT . "layouts/index.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
}