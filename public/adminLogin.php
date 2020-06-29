<?php
if (isset($_GET['code'])) {
    try {
        $eaapen->finishAdminLogin($_GET['code']);
        echo 'Admin authentication has been set up';
    } catch (Exception $exception) {
        echo 'There was an error. See the logs for more information.';
        throw $exception;
    }
} else {
    $eaapen->startAdminLogin();
}
