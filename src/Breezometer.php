<?php namespace Nwidart\BreeezometerLaravel;

use Illuminate\Support\Facades\Facade;

class Breezometer extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Nwidart\Breezometer\Breezometer';
    }
}
