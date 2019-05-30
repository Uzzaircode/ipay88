<?php

namespace Uzzaircode\Ipay88\Tests;

use Uzzaircode\Ipay88\Facade\Ipay88Facade;
use Uzzaircode\Ipay88\Providers\Ipay88ServiceProvider;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return Uzzaircode\Ipay88\Providers\Ipay88ServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [Ipay88ServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'ipay88' =>Ipay88Facade::class,
        ];
    }
}