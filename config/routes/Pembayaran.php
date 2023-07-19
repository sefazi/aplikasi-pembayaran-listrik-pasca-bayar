<?php

namespace Routes;

class Pembayaran extends BaseRoutes
{

    public function index()
    {
        return $this->view('pembayaran/index');
    }

    public function param()
    {
    }
}
