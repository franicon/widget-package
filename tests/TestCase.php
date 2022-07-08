<?php

namespace Franicon\WidgetPackage\Tests;

use Franicon\WidgetPackage\Facades\WidgetPackage;
use Franicon\WidgetPackage\RouteServiceProvider;
use Franicon\WidgetPackage\WidgetPackageServiceProvider;

class TestCase extends  \Orchestra\Testbench\TestCase
{
    protected  function  getPackageProviders($app)
    {
        return[
            WidgetPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected  function  getPackageAliases($app)
    {
        return[
            'FirstPackage'=>WidgetPackage::class
        ];
    }
}