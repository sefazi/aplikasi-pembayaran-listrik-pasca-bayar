<?php

namespace Config;

use Routes;

class Server
{
    public $controller;
    public $method;
    public $param;
    public $uri;

    public function __construct()
    {
        $this->uri = $this->Parsing(URI);
    }


    function Parsing($arg)
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

        return $uri;
    }

    public function SetController($arg)
    {
        $this->controller = $arg;
        $this->method = 'index';
    }

    public function get($file, $arg)
    {
        if (SEPARATOR . $this->uri[2] == $file) {
            /**
             * Initialize the second parameter
             * this funtion fill the public var
             * with Class and method
             */
            $this->initialize($arg);


            if (is_file(CONFIGPATH . ROUTESPATH . ucfirst($this->controller) . '.php')) {
                require_once CONFIGPATH . ROUTESPATH . ucfirst($this->controller) . '.php';
                $app = 'Routes\\' . $this->controller;
                $this->controller = new $app;
                call_user_func_array([$this->controller, $this->method], []);
            }
        }
        // else if ($this->uri[2] == SEPARATOR) {
        //     require_once CONFIGPATH . ROUTESPATH . ucfirst($this->controller) . '.php';
        //     $app = 'Routes\\' . $this->controller;
        //     $this->controller = new $app;
        //     call_user_func_array([$this->controller, $this->method], []);
        // }
    }

    function initialize($arg)
    {
        $param = explode(':', $arg);

        $this->controller = $param[0];
        $this->method = $param[1];
    }
}
