<?php
if (isset($_GET['code'])) {
    $eaapen->finishAdminLogin($_GET['code']);
    echo 'Group authentication has been set up';
} else {
    $eaapen->startAdminLogin();
}
