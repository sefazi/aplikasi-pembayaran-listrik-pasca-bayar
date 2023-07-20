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
     * @var string
     */
    public $endpoint;
    /**
     * ---------------------------------------------------------------
     * ROUTES METHOD
     * ---------------------------------------------------------------
     * @var string
     */
    public $method;
    /**
     * ---------------------------------------------------------------
     * ROUTES PARAM
     * ---------------------------------------------------------------
     * @var array
     */
    public $param = [];
    /**
     * ---------------------------------------------------------------
     * URI
     * ---------------------------------------------------------------
     * @var string
     */
    public $uri;

    /**
     *  
     * GET URL ENDPOINT FOR ROUTE TO THE PATH
     * 
     * This function are made for get the request URL
     */
    function __construct($arg)
    {
        // Trim the request and separate it
        $uri = rtrim($_SERVER[$arg], '/');
        $uri = filter_var($uri, FILTER_SANITIZE_URL);
        $uri = explode('/', $uri);

        // Unset baseurl that not neede
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

        /** 
         *  Put the URL into public var
         * @var string
         */
        $this->uri = $uri;
    }

    public function setDefaultEndpoint($arg = '')
    {
        /**
         * -------------------------------------------------------------------
         * ENDPOINT
         * -------------------------------------------------------------------
         * This var are used for callback
         *
         * @var string
         */
        $this->endpoint = $arg;
    }

    public function setDefaultMethod($arg = '')
    {
        /**
         * -------------------------------------------------------------------
         * METHOD
         * -------------------------------------------------------------------
         * This var are used for callback
         *
         * @var string
         */
        $this->method = $arg;
    }

    public function setParam($arr = [])
    {
        /**
         * -------------------------------------------------------------------
         * PARAM
         * -------------------------------------------------------------------
         * This var are used for callback
         *
         * @var array
         */
        $this->param = $arr;
    }

    public function requireRoute($arg)
    {
        /**
         * separate the routes argument
         * first index are endpoint
         * second index are method
         */
        $routes = explode(':', $arg[1]);

        /** Set to object variable */
        $this->setDefaultEndpoint($routes[0]);
        $this->setDefaultMethod($routes[1]);

        // Check if that file exist
        if (is_file(ROUTESPATH . ucfirst($this->endpoint) . PHPEXT)) {

            // Require Class file for callback
            require_once ROUTESPATH . ucfirst($this->endpoint) . PHPEXT;

            // Inherite Class into new variable
            $app = 'Routes\\' . $this->endpoint;
            $this->endpoint = new $app;

            // callback
            call_user_func_array([$this->endpoint, $this->method], $this->param);
        } else {
            // Change it for get more error exception
            throw new ErrorException("No Routes Found");
        }
    }
}
