<?php

    session_start();
    require_once 'connect.php';
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    if (isset($name)) {

        mysqli_query($connect, "INSERT INTO `message` (`id`, `name`, `email`, `text`) VALUES (NULL, '$name', '$email', '$text')");
    }
    header('Location: ../index.php');
    

?>
