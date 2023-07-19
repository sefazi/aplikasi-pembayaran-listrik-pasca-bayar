<?php

namespace Config;


class Application
{
    public function run($arg)
    {
        define('CONFIGPATH', $arg->configDirectory);
        define('ROUTESPATH', $arg->routes);
        define('VIEWSPATH', $arg->views);
        define('URI', $arg->requesturi);
        define('BASEURL', $arg->baseurl);
        define('SEPARATOR', '/');

        $this->load(
            array(
                $arg->server,
                ROUTESPATH . $arg->baseroutes,
                $arg->baseconfig,
            )
        );;
    }

    function load($arg = [])
    {
        for ($i = 0; $i < count($arg); $i++) {
            require_once $arg[$i];
        }
    }
}
