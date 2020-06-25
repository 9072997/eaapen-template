<?php
if (empty($_GET['code'])) {
    $eaapen->startLogin(false);
} else {
    $eaapen->finishLogin($_GET['code']);
    $eaapen->redirect('/');
}
