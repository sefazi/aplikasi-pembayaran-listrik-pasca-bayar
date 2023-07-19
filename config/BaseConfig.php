<?php

namespace Config;

$server = new Server;

$server->SetController('Home');

$server->get('/home', 'Home:index');
// $server->get('/d', 'Home:param');
