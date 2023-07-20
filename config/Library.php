<?php

/**
 * -------------------------------------------------------------------
 * GLOBAL FUNCTION
 * -------------------------------------------------------------------
 * This function are made for global used.
 * for example you need the base of your url
 * just type
 * 
 *      Config\baseurl('/home');
 * 
 * it will return BASEURL . '/home';
 *
 * @param
 */

if (!function_exists('baseurl')) {
    /**
     * Returns the base URL as defined by the App config.
     * Base URLs are trimmed site URLs without the index page.
     *
     * @param array|string $relativePath URI string or array of URI segments
     * @param string|null  $scheme       URI scheme. E.g., http, ftp
     */
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
}
