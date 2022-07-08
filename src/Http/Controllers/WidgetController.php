<?php

namespace Franicon\WidgetPackage\Http\Controllers;

use Franicon\WidgetPackage\Facades\WidgetPackage;

class WidgetController
{
    public function  index(){
//        return WidgetPackage::widget();
        return view('widget-package::home',[
            'message' => WidgetPackage::widget()
        ]);
    }

}