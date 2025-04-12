<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Staff'])) {
        session_start();
        $iusername = $_POST['username'];
        $ipassword = $_POST['password'];
        $login = "SELECT * FROM admins WHERE username='$iusername' AND password='$ipassword'";
        $result = $conn->query($login);
        if ($result->num_rows > 0) {
            header("Location: index.php");
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    } 
    else if(isset($_POST['student'])) {
        session_start();
        $iusername = $_POST['username'];
        $ipassword = $_POST['password'];
        $login = "SELECT * FROM student WHERE username='$iusername' AND password='$ipassword'";
        $result = $conn->query($login);
        if ($result->num_rows > 0) {
            header("Location: view.php");
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <style>
        .choice {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .choice label,
        input[type="checkbox"] {
            margin: 0 10px;
            font-size: large;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url("image2.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bolder;
            font-size: large;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="reset"] {
            padding: 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <form method="POST">
        <h1>Student Management System</h1>
        <h2>Login</h2>
        <div class="choice">
            <input type="checkbox" name="Staff"><label for="Staff">Staff</label><input type="checkbox"
                name="student"><label for="Student">Student</label>

        </div>
        <label for="username">UserName</label>
        <input type="text" name="username" id="sname" autocomplete="off" placeholder="Enter your Username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter your Password"
            required>
        <input type="submit" value="Login">
        <input type="reset" value="Reset">
        <br>
        <center><button style="background-color:yellow;"><a href="register.php"
                    style="text-decoration:none;color:black;">Register Now</a></button></center>
    </form>


</body>

</html>