<?php

namespace Routes;

class Home extends Views
{

    public function index()
    {
        // var_dump('sss');
        $data = ['nasi goreng'];
        $this->view('home/index', $data);
    }

    public function param()
    {
    }
}
