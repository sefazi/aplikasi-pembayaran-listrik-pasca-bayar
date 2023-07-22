<?php

namespace Routes;

class Pelanggan extends Views
{

    public function index()
    {
        $content=[
            'render' => 'pelanggan'
        ];
        return $this->view('pelanggan/index',$content);
    }
}