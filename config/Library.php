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
    function redirecting($path = '', $msg = [])
    {
        $path = rtrim($path);

        // index.php or any other PHP path
        try {
            // Remove separator
            $pos = strpos($path, SEPARATOR);
            if ($pos !== false) {
                $url = substr_replace($path, "", $pos, strlen(SEPARATOR));
            } else {
                $url = $path;
            }
            // Redirecting
            header("Location: " . BASEURL . $url);
            // exit();
        } catch (\Throwable $e) {
            $data = [
                'title' => 'Error Ocurred',
                'headline' => '500',
                'header' => 'Oops! You hit snag',
                'message' => $e->getMessage()
            ];
            error_redirect($data);
        }
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

if (!function_exists('error_redirect')) {
    /**
     * -------------------------------------
     * Important message for error page
     * -------------------------------------
     * the strcuture must contain
     * title, headline, header and message
     * 
     * For example,
     * 
     * $data = [
     *           'title' => '404 Page not found',
     *           'headline' => '404',
     *           'header' => 'Oops! Page not found',
     *           'message' => 'We could not find the page you were looking for.'
     *       ];
     *
     */

    function error_redirect($data = [])
    {
        // Make a variable each index of array
        extract($data, EXTR_SKIP);

        // Clear data when the variable are made
        unset($data);

        // Redirect to your custom 404.php file
        require_once JUMPUP . VIEWSPATH . 'error' . PHPEXT;
        exit();
        die();
    }
}

if (!function_exists('getPost')) {
    /**
     * -------------------------------------
     * GET POST
     * -------------------------------------
     * get the $_POST value as object
     */

    function getPost()
    {
        // Convert the array to a JSON-encoded string
        $jsonString = json_encode($_POST);

        // Convert the JSON-encoded string back to an object
        $obj = json_decode($jsonString);

        if ($obj != null) {
            return $obj;
        }

        return null;
    }
}

if (!function_exists('session')) {
    /**
     * -------------------------------------
     * INIT SESSION
     * -------------------------------------
     * Set the $_SESSION value
     */

    function session()
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session_start();
        }
    }
}

if (!function_exists('setSession')) {
    /**
     * -------------------------------------
     * SET SESSION
     * -------------------------------------
     * Set the $_setSession value
     * 
     * @var string
     */

    function setSession($val, string $name = '')
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Set a string to a session variable
        if (is_array($val)) {
            foreach ($val as $key => $value) {
                $_SESSION[$key] = $value;
            }
        } else if (is_object($val)) {
            foreach ($val as $key => $value) {
                $_SESSION[$key] = $value;
            }
        } else {
            $_SESSION[$name] = $val;
        }
    }
}

if (!function_exists('withInput')) {
    /**
     * -------------------------------------
     * SET SESSION
     * -------------------------------------
     * Set the $_SESSION value
     * 
     * @var string
     */

    function withInput($val)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Set a string to a session variable
        foreach ($val as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }
}

if (!function_exists('setFlash')) {
    /**
     * -------------------------------------
     * SET SESSION
     * -------------------------------------
     * Set the $_SESSION value
     * 
     * @var string
     */

    function setFlash(string $key, string $msg)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Set a string to a session variable
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            // Redeclare
            $_SESSION[$key] = $msg;
        } else {
            // Declare
            $_SESSION[$key] = $msg;
        }
    }
}

if (!function_exists('setFlashError')) {
    /**
     * -------------------------------------
     * SET SESSION
     * -------------------------------------
     * Set the $_SESSION value
     * 
     * @var string
     */

    function setFlashError(string $key, $s = true)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Set a string to a session variable
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            $_SESSION[$key] = $s;
        } else {
            $_SESSION[$key] = $s;
        }
    }
}

if (!function_exists('hasFlashError')) {
    /**
     * -------------------------------------
     * SET SESSION
     * -------------------------------------
     * Set the $_SESSION value
     * 
     * @var string
     */

    function hasFlashError(string $key)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Set a string to a session variable
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('getFlash')) {
    /**
     * -------------------------------------
     * GET SESSION
     * -------------------------------------
     * GET the $_SESSION value
     * 
     * @var string
     */

    function getFlash(string $key)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Get a string to a session variable
        if (isset($_SESSION[$key])) {
            // Get message
            $msg = $_SESSION[$key];
            // Unset Flash
            unset($_SESSION[$key]);
            // Return
            return $msg;
        } else {
            return null;
        }
    }
}

if (!function_exists('getSession')) {
    /**
     * -------------------------------------
     * GET SESSION
     * -------------------------------------
     * GET the $_SESSION value
     * 
     * @var string
     */

    function getSession(string $key)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Get a string to a session variable
        if (isset($_SESSION[$key])) {
            // Get message
            $msg = $_SESSION[$key];
            // Return
            return $msg;
        } else {
            return null;
        }
    }
}

if (!function_exists('removeSession')) {
    /**
     * -------------------------------------
     * SET SESSION
     * -------------------------------------
     * Set the $_SESSION value
     * 
     * @var string
     */

    function removeSession($val)
    {
        // Start the session
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        // Set a string to a session variable
        foreach ($val as $key => $value) {
            unset($_SESSION[$key]);
        }

        session_destroy();
    }
}

if (!function_exists('old')) {
    /**
     * -------------------------------------
     * GET OLD VALUES FROM SESSION
     * -------------------------------------
     * get the $_SESSION value as object
     */

    function old(string $key, $default = null, $escape = 'html')
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            // Start the session
            session();
        }

        $value = $default;

        // Check data
        if (isset($_SESSION[$key])) {
            // Set to variable
            $value = $_SESSION[$key];
            // Unset the session variable
            unset($_SESSION[$key]);
        }

        // Return the default value if nothing
        // found in the old input.
        if ($value === null) {
            return $default;
        }

        return $value;
    }
}
