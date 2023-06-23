<?php

@$kps = $_GET['kps'];

if (!empty($kps)) {
    switch ($kps) {

            // dashboard
        case 'dash':
            include "page/dashboard.php";
            break;

        default:
            include "page/dashboard.php";
            break;
    }
} else {

    include "page/dashboard.php";
}
