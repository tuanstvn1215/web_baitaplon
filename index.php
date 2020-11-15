<?php

if (session_id() === '')
    session_start([
        'cookie_lifetime' => 86400,
    ]);
require_once './mvc/middlewares/Bridge.php';
new App();
