<?php

namespace Franicon\WidgetPackage\Tests\Feature;

use Franicon\WidgetPackage\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{

    /** @test */

    function can_get_the_message()
    {

    $this->get('widget')->assertSee('hello Widget');
    }
     /** @test */

    function can_get_the_message_through_a_view()
    {

        $this->withoutExceptionHandling();
    $this->get('widget')->assertViewIs('widget-package::home');
    }

}