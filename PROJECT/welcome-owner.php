<?php


session_start();
if( isset($_SESSION['owner'])) {
        echo 'Hello '. $_SESSION['owner'] . ' You are adminstrator on this page';
    } else {
        echo 'You can not accesss';
    }
?>