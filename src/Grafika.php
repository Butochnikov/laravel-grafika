<?php

namespace Butochnikov\Grafika;

use Illuminate\Support\Facades\Facade;

class Grafika extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Grafika\Grafika';
    }
}
