<?php

namespace Franicon\WidgetPackage\Tests\Unit;

use Franicon\WidgetPackage\Tests\TestCase;
use Franicon\WidgetPackage\Facades\WidgetPackage;



class WidgetTest extends TestCase
{

    /** @test */

    function open_widget(){
       $this->assertEquals(
           "hello Widget",
           WidgetPackage::widget()
       );
    }
}