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

        $this->registerConfiguration();
        $this->registerAlias();
    }

    /**
     * Register the configuration file so Laravel can publish them
     * Also merges the published config file with original
     */
    private function registerConfiguration()
    {
        $configPath = __DIR__ . '/../config/breezometer.php';
        $this->mergeConfigFrom($configPath, 'breezometer');
        $this->publishes([$configPath => config_path('breezometer.php')]);
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
