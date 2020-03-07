<?php

namespace Laraclass\Classifieds\Facades;

use Illuminate\Support\Facades\Facade;

class Classifieds extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraclass.classifieds';
    }
}
