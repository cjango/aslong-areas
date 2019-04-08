<?php

namespace AsLong\Area\Facades;

use Illuminate\Support\Facades\Facade;

class Area extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\Area\Area::class;
    }
}
