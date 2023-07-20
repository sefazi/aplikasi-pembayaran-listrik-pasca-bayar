<?php

namespace Routes;

class Home extends Views
{

    public function index()
    {
        $data = ['nasi goreng'];
        $this->view('home/index', $data);
    }

    public function param()
    {
    }
}
