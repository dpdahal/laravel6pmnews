<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $pagePath;

    public function __construct()
    {
        $this->pagePath = 'backend.pages.';
    }
}
