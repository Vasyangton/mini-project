<?php

    $connect = mysqli_connect('localhost', 'yilyukqj_123', 'lolKek12345', 'yilyukqj_123');
 $connect->set_charset("utf8");
    if (!$connect) {
        die('Error connect to DataBase');
    }
