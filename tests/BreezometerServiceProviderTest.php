<?php namespace Nwidart\BreezometerLaravel\Tests;

use Orchestra\Testbench\TestCase;

class BreezometerServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            'Nwidart\BreezometerLaravel\BreezometerServiceProvider',
        ];
    }

    /** @test */
    public function it_should_find_service_provider()
    {
    }
}
