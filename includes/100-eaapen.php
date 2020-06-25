<?php
$eaapen = new eaapen\Eaapen(
    'My App Engine Project',
    [
        'Home' => '/',
        'Log In' => '/login',
        'Log Out' => '/logout'
    ],
    '/login',
    '/adminLogin'
);
