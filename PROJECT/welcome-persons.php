<?php


session_start();
if( isset($_SESSION['persons'])) {
        echo 'Hello '. $_SESSION['persons'] . ' You are adminstrator on this page';
    } else {
        echo 'You can not accesss';
    }
?>