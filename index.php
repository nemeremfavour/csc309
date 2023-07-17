<!DOCTYPE html>
<html>

<head>
    <title>CSC 309 DB Class</title>
</head>

<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table cellpadding="10" cellspacing="1" border="1">
        <thead>
            <tr>
                <td>SN</td>
                <td>Last Name</td>
                <td>First Name</td>
                <td>Gender</td>
                <td>Date of Birth</td>
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
            <?php
                //my server variables
                $server = 'localhost'; // 127.0.0.1
                $username = 'root';
                $password = '';
                $db = 'csc309';

                //my server connection
                $conn = new mysqli($server, $username, $password, $db);
            
            //check server connection
            if ($conn){
                //my select query
                $sql = "SELECT * FROM users";
                
                //query result
                $result = $conn->query($sql);
                
                //fetch the data from the result set
                while ($row = $result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["lastname"];?></td>
                <td><?php echo $row["firstname"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["date_of_birth"];?></td>
                <td><?php echo $row["email"];?></td>
            </tr>

            <?php }
                
                }
                // Close connection
                $conn->close();
             ?>

        </tbody>
    </table>
</body>

</html>
