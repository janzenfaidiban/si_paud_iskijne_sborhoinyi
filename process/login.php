<?php

    // Initialize the session
    // session_start();

    include __DIR__ . '../../config/database.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

        $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
        $count = mysqli_num_rows($result);

        if ($count == TRUE) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'admin';

            header('Location: ../?page=dasbor');
            // header('Location: ../welcome.php');
            exit;
        
        } else {

            header('Location: ../login/?p=admin');
            exit;

        }
    } else {
            $_SESSION['login'] = 'error';
    }



?>