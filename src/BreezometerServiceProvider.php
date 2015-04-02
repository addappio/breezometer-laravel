<?php namespace Addapp\BreezometerLaravel;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Addapp\Breezometer\Breezometer;

class BreezometerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->package('addapp/breezometer-laravel', null, __DIR__);

        $this->app->bindShared('Addapp\Breezometer\Breezometer', function ($app) {
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
        $aliasLoader->alias('Breezometer', 'Addapp\Breezometer\Breezometer');
    }
}
