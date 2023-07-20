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

if (!function_exists('redirecting')) {
    /**
     * Returns the base URL as defined by the App config.
     * Base URLs are trimmed site URLs without the index page.
     *
     * @param array|string $relativePath URI string or array of URI segments
     * @param string|null  $scheme       URI scheme. E.g., http, ftp
     */
    function redirecting($file = '', $msg = [])
    {
        $file = rtrim($file);

        // index.php or any other PHP file

        // ... your code to determine the 404 situation ...

        // Set the HTTP status code to 404
        http_response_code(404);

        // Redirect to your custom 404.php file
        try {
            header("Location: " . $file);
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
        exit(); // Make sure to exit to prevent further script execution

    }
}

if (!function_exists('load')) {
    /**
     * Returns the base URL as defined by the App config.
     * Base URLs are trimmed site URLs without the index page.
     *
     * @param array|string $relativePath URI string or array of URI segments
     * @param string|null  $scheme       URI scheme. E.g., http, ftp
     */
    function load($file = '', $msg = [])
    {
        $file = rtrim($file);

        // Redirect to your custom 404.php file
        return require_once $file;
    }
}
