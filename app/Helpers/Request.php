<?php

namespace App\Helpers;

/**
 * Request Class For Parsing HTTP Request Body
 */
class Request
{
	private $input;
	private $url;
	private $method;

	function __construct()
	{
		$this->input = json_decode(file_get_contents("php://input"));
		$this->url = $_SERVER['REQUEST_URI'];
		$this->method = $_SERVER['REQUEST_METHOD'];
	}

	public function get($data = null)
	{
		if ($data) {
			return $this->input->$data;
		}

  	return (array)$this->input;
	}

	public function url()
	{
    return $this->url;
	}

	public function method()
	{
    return $this->method;
	}
}
