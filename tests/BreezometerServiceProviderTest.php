<?php namespace Nwidart\BreezometerLaravel\Tests;

use Orchestra\Testbench\TestCase;

class BreezometerServiceProviderTest extends TestCase
{
    protected function getPackageProviders()
    {
        return [
            'Nwidart\BreezometerLaravel\BreezometerServiceProvider',
        ];
    }

    protected function getPackageAliases()
    {
        return [
            'Breezometer' => 'Nwidart\Breezometer\Breezometer'
        ];
    }

    /** @test */
    public function it_should_find_service_provider()
    {
    }
}
