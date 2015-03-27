<?php namespace Nwidart\BreezometerLaravel;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Nwidart\Breezometer\Breezometer;

class BreezometerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->package('nwidart/breezometer-laravel', null, __DIR__);

        $this->app->bindShared('Nwidart\Breezometer\Breezometer', function ($app) {
            return new Breezometer($app['config']->get('breezometer-laravel::api_key'));
        });

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
