<?php

namespace Larpress\Admin;

class Admin
{
    public $sideBar;
    public $topBar;

    /**
     * @param TopBar $topBar
     * @param SideBar $sideBar
     */
    public function __construct(TopBar $topBar, SideBar $sideBar)
    {
        $this->topBar = $topBar;
        $this->sideBar = $sideBar;
    }
}