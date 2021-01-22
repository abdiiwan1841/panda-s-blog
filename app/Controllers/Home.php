<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$context = [
			'title' => "Panda's Blog"
		];

		return view('pages/home', $context);
	}

	//--------------------------------------------------------------------

	public function dashboard()
	{
		$users = new UserModel();
		$user = $users->getUsers();

		$context = [
			'title' => 'Dashboard',
			'data' => $user
		];

		return view('pages/dashboard', $context);
	}
}
