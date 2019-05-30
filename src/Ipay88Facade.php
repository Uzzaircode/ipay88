<?php

namespace Uzzaircode\Ipay88\Facade;

use Illuminate\Support\Facades\Facade;

class Ipay88Facade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ipay88';
    }
}
