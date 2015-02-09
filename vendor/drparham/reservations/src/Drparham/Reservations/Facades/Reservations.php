<?php namespace Drparham\Reservations\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Reservations extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'reservations'; }
 
}