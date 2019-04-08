<?php

namespace AsLong\Area\Facades;

use Illuminate\Support\Facades\Facade;

class Address extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\Area\Address::class;
    }
}
