<?php

namespace Routes;

class Profile extends Views
{

    public function index()
    {
        $content=[
            'render' => 'profile'
        ];
        return $this->view('profile/index',$content);
    }
}