<?php

namespace Routes;

use Config;

class Views
{
    public function view($file, $data = [])
    {
        if (is_file(JUMPUP . VIEWSPATH . $file . PHPEXT)) {
            require_once JUMPUP . VIEWSPATH . $file . PHPEXT;
        }
    }

    public function model()
    {
    }
}
