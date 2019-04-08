<?php

namespace AsLong\Area\Facades;

use Illuminate\Support\Facades\Facade;

class Lbs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\Area\Tools\Lbs::class;
    }
}
