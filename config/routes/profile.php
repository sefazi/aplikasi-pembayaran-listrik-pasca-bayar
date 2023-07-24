<?php

namespace Routes;

class Profile extends Views
{

    public function index()
    {
        $login = getSession('is-login');
        if (!$login) {
            redirecting('/login');
            die;
        }

        $content = [
            'render' => 'profile'
        ];
        return $this->view('profile/index', $content);
    }
}
