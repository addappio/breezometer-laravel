<?php namespace Addapp\BreeezometerLaravel;

use Illuminate\Support\Facades\Facade;

class Breezometer extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Addapp\Breezometer\Breezometer';
    }
}
