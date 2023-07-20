<?php

namespace Config;

use ErrorException;
use Routes;

class Server
{
    /**
     * ---------------------------------------------------------------
     * ROUTES CLASS 
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $endpoint;
    /**
     * ---------------------------------------------------------------
     * ROUTES METHOD
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $method;
    /**
     * ---------------------------------------------------------------
     * ROUTES PARAM
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var array
     */
    public $param = [];
    /**
     * ---------------------------------------------------------------
     * URI
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $uri;

    function __construct($arg)
    {
        $uri = rtrim($_SERVER[$arg], '/');
        $uri = filter_var($uri, FILTER_SANITIZE_URL);
        $uri = explode('/', $uri);

        if (isset($uri[0]) && $uri[0] == "") {
            unset($uri[0]);
        }
        if (isset($uri[1]) && $uri[1] != "") {
            unset($uri[1]);
        }
        if ($uri == null) {
            $uri[2] = SEPARATOR;
        }

        /**
         * Reset index
         * @var array
         */
        $uri = array_values($uri);

        /**
         * replace each key
         * add separator on it
         */
        for ($i = 0; $i < count($uri); $i++) {
            $uri[$i] = '/' . $uri[$i];
        }

        $this->uri = $uri;
    }

    public function setDefaultEndpoint($arg = '')
    {
        $this->endpoint = $arg;
    }

    public function setDefaultMethod($arg = '')
    {
        $this->method = $arg;
    }

    public function setParam($arr = [])
    {
        $this->param = $arr;
    }

    public function requireRoute($arg)
    {
        $routes = explode(':', $arg[1]);
        $this->setDefaultEndpoint($routes[0]);
        $this->setDefaultMethod($routes[1]);

        if (is_file(ROUTESPATH . ucfirst($this->endpoint) . PHPEXT)) {
            require_once ROUTESPATH . ucfirst($this->endpoint) . PHPEXT;
            $app = 'Routes\\' . $this->endpoint;
            $this->endpoint = new $app;
            call_user_func_array([$this->endpoint, $this->method], $this->param);
        } else {
            throw new ErrorException("No Routes Found");
        }
    }
}
