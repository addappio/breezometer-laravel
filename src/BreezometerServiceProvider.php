<?php namespace Nwidart\BreeezometerLaravel;

use Illuminate\Support\ServiceProvider;

class BreezometerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConfiguration();
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
}
