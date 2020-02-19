<?php
    include 'config.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $query = mysqli_query($link,"select * from user where username='$username' and password='$password' ;");
    $cek = mysqli_num_rows($query);

    if ($cek>0) {
        header('Location: ../index.php');
    }
    else {
        header('Location: form.php');
    }
?>