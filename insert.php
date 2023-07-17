<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = '';
    $db = 'csc309';

    // Open a new connection
    $con = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Create a Table
    $sql = "INSERT INTO users (firstname, lastname, email, gender, date_of_birth) 
    VALUES ('Divine-Favour', 'Chinedu', 'chineduchinemerem10@gmail.com', 'M', '24-12-1960')";

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Record inserted successfully';
    } else {
        echo 'Error inserting record: ' . $con->error;
    }

    // Close connection
    $con->close();
?>
