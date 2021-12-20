<?php

namespace Larpress\Admin;

class SideBar
{
    public $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
}