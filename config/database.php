<?php

    // error_reporting(0);

	// session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "si_paud_iskijne_sborhoinyi";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";

?>
