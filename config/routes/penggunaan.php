<?php

namespace Routes;

class Penggunaan extends Views
{

    public function index()
    {
        $content=[
            'render' => 'penggunaan'
        ];
        return $this->view('penggunaan/index',$content);
    }
}