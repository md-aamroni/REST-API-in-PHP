<?php

namespace App\Http\Core;

header('Content-Type: application/json');
header('Content-Type: application/json; charset:utf-8;');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET PUT POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

class RestApi
{
	public $response = ["message" => "", "success" => "", "response" => ""];
	private $authorization = '418dcdaf886de76ffc5dc3296d0a2be6ddfb406ae0e08e7741f686ea9748bece';

	public function __construct()
	{
		// $headers = apache_request_headers();
		$headers = getallheaders();

		foreach ($headers as $header => $value) {
			$headers[$header] = $value;
		}

		if (@$headers['Authorization'] === "") {
			$this->response['message']  = "Authentication key is required";
			$this->response['success']  = "Error Request";
			$this->response['response'] = "203";
			echo json_encode($this->response);
			exit();
		}

		if (@$headers['Authorization'] !== $this->authorization) {
			$this->response['message']  = "Oops! Invalid authentication credential";
			$this->response['success']  = "Error Credential";
			$this->response['response'] = "205";
			echo json_encode($this->response);
			exit();
		}
	}
}
