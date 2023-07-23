<?php

namespace Config;

class Paths
{
    /**
     * ---------------------------------------------------------------
     * BASE URL
     * ---------------------------------------------------------------
     *
     * This contain the name of your base url folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $baseurl = 'http://localhost:8080/aplikasi-pembayaran-listrik-pasca-bayar/';
    /**
     * ---------------------------------------------------------------
     * REQUEST URL
     * ---------------------------------------------------------------
     *
     * This must contain the name of your request parameter. Used
     * in the Server for make decision to choose correct file.
     *
     * @var string
     */
    public $requesturi = 'REQUEST_URI';
    /**
     * ---------------------------------------------------------------
     * CONFIG DIRECTORY
     * ---------------------------------------------------------------
     *
     * This must contain the name of your Config folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $configDirectory = 'config/';
    /**
     * ---------------------------------------------------------------
     * ROUTES
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "routes" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $routesDirectory = 'routes/';
    /**
     * ---------------------------------------------------------------
     * VIEWS DIRECTORY
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "views" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $viewsDirectory = 'views/';
    /**
     * ---------------------------------------------------------------
     * CONNECTION DIRECTORY
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     *
     * @var string
     */
    public $connectionDirectory = 'connection/';
}
