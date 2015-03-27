<?php namespace Nwidart\BreezometerLaravel;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Nwidart\Breezometer\Breezometer;

class BreezometerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bindShared('Nwidart\Breezometer\Breezometer', function () {
            return new Breezometer(config('breezometer.api_key'));
        });

        $this->package('nwidart/breezometer-laravel');
        $this->registerAlias();
    }

    /**
     * Register the Breezometer laravel facade.
     */
    private function registerAlias()
    {
        $aliasLoader = AliasLoader::getInstance();
        $aliasLoader->alias('Breezometer', 'Nwidart\Breezometer\Breezometer');
    }
}
