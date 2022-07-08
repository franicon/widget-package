<?php

namespace Franicon\WidgetPackage\Facades;

use Illuminate\Support\Facades\Facade;

class WidgetPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'widget';
    }
}