<!DOCTYPE html>
<html>

<head>
    <title>CSC 309 DB Class</title>
</head>

<body>
    <h2>Registration Form</h2>

    <form action="process.php" method="post">
        <div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname">
        </div>

        <div>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob">
        </div>

        <div>
            <label for="gender">Gender</label>
            <select name="gender">
                <option>select gender</option>
                <option>M</option>
                <option>F</option>
            </select>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
