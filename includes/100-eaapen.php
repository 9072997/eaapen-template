<?php
function eaapen()
{
    static $instance = null;
    if (!$instance) {
        $instance = new eaapen\Eaapen(
            'My App Engine Project',
            [
                'Home' => '/',
                'Log In' => '/login',
                'Log Out' => '/logout'
            ],
            '/login',
            '/adminLogin'
        );
    }
    return $instance;
}
eaapen();
