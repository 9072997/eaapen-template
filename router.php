<?php
require_once __DIR__ . '/vendor/autoload.php';
return (new eaapen\Router())->route($_SERVER['REQUEST_URI']);
