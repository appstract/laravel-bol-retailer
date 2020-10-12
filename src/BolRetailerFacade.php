<?php

namespace Appstract\BolRetailer;

use Illuminate\Support\Facades\Facade;

class BolRetailerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bol.retailer';
    }
}
