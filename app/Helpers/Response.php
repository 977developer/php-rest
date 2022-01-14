<?php

namespace App\Helpers;

/**
 * Response Class For Sending HTTP Response
 */
class Response
{
	
  private static $instance = null;

	public static function send($data, $code = 200)
	{
		http_response_code($code);
		echo json_encode($data);
	}

  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Response();
    }
 
    return self::$instance;
  }

  public static function send_404()
  {
    self::send([
      'error' => 'ERR_PAGE_NOT_FOUND',
      'message' => 'The page you requested was not found'
    ], 404);
  }
}
