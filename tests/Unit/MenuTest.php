<?php

namespace Larpress\Admin\Tests\Unit;

use Larpress\Admin\Menu;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
    public function test_create()
    {
        $menu = new Menu('main');
        $this->assertEquals('main', $menu->id);
    }

    public function test_children_menu()
    {

    }

    public function test_menus()
    {

    }
}
