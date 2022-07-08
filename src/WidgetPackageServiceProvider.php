<?php

namespace Franicon\WidgetPackage;

use Illuminate\Support\ServiceProvider;

class WidgetPackageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom($this->basePath('routes/web.php'));
        $this->loadViewsFrom($this->basePath('resources/views'), 'widget-package');

        $this->publishes([
            $this->basePath('resources/views') => resource_path('views/vendor/widget-package')
        ], 'widget-package-views');

        $this->publishes([
            $this->basePath('config/widget-package.php') => base_path('config/widget-package.php')
        ], 'widget-package-config');
    }

    public function register()
    {
        $this->app->bind('widget', function () {
            return new Widget;
        });

        $this->mergeConfigFrom($this->basePath('config/widget-package.php'), 'widget-package');
    }

    public function basePath($path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}