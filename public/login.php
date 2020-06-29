<?php
if (empty($_GET['code'])) {
    $eaapen->startLogin(false);
} else {
    try {
        $eaapen->finishLogin($_GET['code']);
        $eaapen->redirect('/');
    } catch (Exception $exception) {
        echo 'There was an error signing you in.';
        throw $exception;
    }
}
