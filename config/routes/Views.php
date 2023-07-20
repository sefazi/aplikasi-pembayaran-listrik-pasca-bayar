<?php

namespace Routes;

class Views
{
    /**
     * -------------------------------------------------------------------
     * VIEW
     * -------------------------------------------------------------------
     * This function is used for including the view file
     * this function are not returning the error syntax
     * in each including file.
     *
     * @var string
     */
    public function view($file, $data = [])
    {
        // Make a variable each index of array
        extract($data, EXTR_SKIP);

        // Clear data when the variable are made
        unset($data);

        // Require the file
        if (is_file(JUMPUP . VIEWSPATH . $file . PHPEXT)) {
            require_once JUMPUP . VIEWSPATH . $file . PHPEXT;
        }
    }

    public function model()
    {
    }
}
