<?php

namespace Routes;

class Invoice extends Views
{

    public function index()
    {
        $content=[
            'render' => 'invoice'
        ];
        return $this->view('invoice/index',$content);
    }
}