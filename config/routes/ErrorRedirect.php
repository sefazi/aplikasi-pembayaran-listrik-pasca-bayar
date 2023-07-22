<?php

namespace Routes;

class ErrorRedirect extends Views
{

    public function init()
    {
        return $this->view('error');
    }
}
