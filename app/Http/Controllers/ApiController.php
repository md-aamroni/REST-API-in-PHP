<?php

namespace App\Http\Controllers;

use App\Http\Core\RestApi;

class ApiController extends RestApi
{
	private $url = 'https://jsonplaceholder.typicode.com/posts';

	public function index()
	{
		$http = file_get_contents($this->url);
		return json_decode($http);
	}

	public function show($id)
	{
		$http = file_get_contents($this->url . '/' . $id);
		return json_decode($http);
	}
}
