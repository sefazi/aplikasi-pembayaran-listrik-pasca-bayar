<?php

namespace Routes;

class Pembayaran extends Views
{

    public function index()
    {
        if ($_POST != null) {
            var_dump(getPost()->daya);
        }else{
            $content=[
                'render' => 'pembayaran'
            ];
            return $this->view('pembayaran/index',$content);
        }
    }
}
