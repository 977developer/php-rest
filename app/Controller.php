<?php 

namespace App;

use App\Helpers\Request;
use App\Helpers\Response;
use App\Helpers\Helper;

/**
 * Handle Methods Described By Routes
 */
class Controller
{

  public function simpleRequestHandler(Request $request)
  {
    $postData = $request->get();
    $requiredKeys = ['first_name', 'last_name'];
    $err = [];

    foreach ($requiredKeys as $key) {
      if (!array_key_exists($key, $postData)) {
        $err[] = $key . ' is required';
      }
    }
    
    if (!empty($err)) {
      return Response::send(['errors' => $err], 400);
    }

    // Only return first_name, last_name, email
    $with = ['first_name', 'last_name', 'email'];
    $response = array_intersect_key($postData, array_flip($with));

    Response::send($response, 200);
  }
}
