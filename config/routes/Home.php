<?php

namespace Routes;

class Home extends BaseRoutes
{

    public function index()
    {
        return $this->view('home/index');
    }

    public function param()
    {
    }
}
