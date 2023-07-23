<?php

namespace Routes;

class Tagihan extends Views
{

    public function index()
    {
        $content=[
            'render' => 'tagihan'
        ];
        return $this->view('tagihan/index',$content);
    }
}