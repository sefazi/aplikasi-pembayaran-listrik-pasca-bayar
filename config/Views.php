<?php

namespace Config;


class Views
{
    public function view($arg = '')
    {
        if (is_file(VIEWSPATH . $arg . '.php')) {
            require_once VIEWSPATH . $arg . '.php';
        }
    }
}
