<?php

namespace Config;

$server = new Server;

$server->SetController('Home');

$server->get('/pembayaran', 'Pembayaran:index');
$server->get('/home', 'Home:index');
// $server->get('/d', 'Home:param');
