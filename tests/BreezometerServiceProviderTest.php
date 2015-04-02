<?php namespace Addapp\BreezometerLaravel\Tests;

use Orchestra\Testbench\TestCase;

class BreezometerServiceProviderTest extends TestCase
{
    protected function getPackageProviders()
    {
        return [
            'Addapp\BreezometerLaravel\BreezometerServiceProvider',
        ];
    }

    protected function getPackageAliases()
    {
        return [
            'Breezometer' => 'Addapp\Breezometer\Breezometer'
        ];
    }

    /** @test */
    public function it_should_find_service_provider()
    {
    }
}
