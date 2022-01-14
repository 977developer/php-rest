<?php

namespace App\Helpers;

require(__DIR__ . '/../Routes.php');

/**
 * Handle Routing For the App
 */
class Router
{
  private $url;
  private static $instance = null;
  public $regusteredRoutes = [];

  function __construct()
  {
    $this->url = $_SERVER['REQUEST_URI'];
  }

  public function get($url, $callback)
  {
    $this->regusteredRoutes['GET'][$url] = $callback;
  }

  public function post($url, $callback)
  {
    $this->regusteredRoutes['POST'][$url] = $callback;
  }

  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Router();
    }
 
    return self::$instance;
  }
}
