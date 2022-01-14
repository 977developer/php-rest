<?php 

namespace App\Helpers;

class Helper
{
  /**
   * Pluck an array of values from an array.
   *
   * @param  array   $array
   * @param  string  $value
   * @param  string  $key
   * @return array
   */
  public static function array_pluck($array, $value, $key = null)
  {
    $results = array();

    foreach ($array as $item)
    {
      if (is_object($item)) {
        $itemValue = $item->{$value};
      } else {
        $itemValue = $item;
      }

      // If the key is "null", we will just append the value to the array and keep
      // looping. Otherwise we will key the array using the value of the key we
      // received from the developer. Then we'll return the final array form.
      if (is_null($key))
      {
          $results[] = $itemValue;
      }
      else
      {
          $itemKey = is_object($item) ? $item->{$key} : $item[$key];

          $results[$itemKey] = $itemValue;
      }
    }

    return $results;
  }
}