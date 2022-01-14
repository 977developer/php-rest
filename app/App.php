<?php 

namespace App;

use App\Helpers\Response;
use App\Helpers\Request;
use App\Helpers\Router;
use App\Controller;

/**
 * Main Application Class
 */
class App
{
  private static $instance = null;
  public static $response;
  
  public $request;
  public $router;

	public function bootstrap()
	{
    self::$response = Response::getInstance();
    $this->request = new Request();
    $this->router = Router::getInstance();

    return $this;
	}

  public function start()
  {
    $url = $this->request->url();
    $method = $this->request->method();
    $response = self::$response;
    $routes = $this->router->regusteredRoutes;
    
    if (isset($routes[$method]) && isset($routes[$method][$url])) 
    {
      $controller = new Controller();
      return $controller->{$routes[$method][$url]}($this->request);
    }

    $response::send_404();
  }

  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new App();
    }
 
    return self::$instance;
  }
}
