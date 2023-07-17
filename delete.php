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

    // Query
    $sql = "DELETE FROM users WHERE id = 3";

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Record deleted successfully';
    } else {
        echo 'Error deleting record: ' . $con->error;
    }

    // Close connection
    $con->close();
?>
