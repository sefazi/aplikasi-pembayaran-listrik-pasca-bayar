<?php

namespace Routes;

class BaseRoutes
{
    public function view($arg = '')
    {
        if (is_file(VIEWSPATH . $arg . '.php')) {
            require_once VIEWSPATH . $arg . '.php';
        }
    }
}
