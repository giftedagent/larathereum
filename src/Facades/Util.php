<?php

namespace Larathereum\Facades;

use Illuminate\Support\Facades\Facade;

class Util extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'util';
    }
}