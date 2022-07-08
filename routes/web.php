<?php

use Illuminate\Support\Facades\Route;

Route::get(config('widget-package.route'), 'WidgetController@index');

