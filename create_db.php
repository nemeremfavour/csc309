<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = '';

    // Open a new connection
    $con = new mysqli($server, $username, $password);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Create Database
    $sql = 'CREATE DATABASE csc309';

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Database Created Successful';
    } else {
        echo 'Error creating database: ' . $con->error;
    }

    // Close connection
    $con->close();
?>
