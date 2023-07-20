<?php

namespace Config;

function baseurl($param = '')
{
    $param = rtrim($param);

    $pos = strpos($param, SEPARATOR);
    if ($pos !== false) {
        $endpoint = substr_replace($param, "", $pos, strlen(SEPARATOR));
    } else {
        $endpoint = $param;
    }

    return BASEURL . $endpoint;
}
