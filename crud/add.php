<html>
    <head>
        <title> Add Users </title>
    </head>

    <body>
        <a href="index.php">Go to Home</a>
        <br></br>

        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
                </tr>
                <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
                </tr>
                <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

<?php

//Check If Form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    // Include database commection file
    include_once("config.php");

    //Insert user dara into table
    $result = mysqli_query($mysqli, "INSERT INTO USERS(name, email, mobile) VALUES ('$name','$email','$mobile')");

    // Show massage when user added
    echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>