<?php

namespace Larpress\Admin;

use Illuminate\Support\Arr;
use Larpress\Admin\Exception\MenuIdExistsException;

class Menu
{
    public $id;
    public $name;
    public $icon;
    public $uri;
    public $order;
    private $children = [];

    public function __construct($id, $name = null, $uri = null, $order = 0, $icon = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->uri = $uri;
        $this->order = $order;
        $this->icon = $icon;
    }

    /**
     * @throws MenuIdExistsException
     */
    public function addChildren(Menu $menu)
    {
        if (!array_key_exists($menu->id, $this->children)) {
            $this->children[$menu->id] = $menu;
        } else {
            throw new MenuIdExistsException($menu->id);
        }
    }

    public function children(): array
    {
        return Arr::sort($this->children, function ($menu) {
            return $menu->order;
        });
    }
}