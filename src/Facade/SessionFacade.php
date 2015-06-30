<?php
namespace Tiga\Framework\Facade;

use Tiga\Framework\Facade\Facade as Facade;

/**
 * Session Facade
 */
class SessionFacade extends Facade{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    
     public static function getFacadeAccessor() { 
     	
     	return 'session';

     }
}