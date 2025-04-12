<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $check="SELECT * FROM admins WHERE username='$username'";
    $final=$conn->query($check);
    if($final->num_rows>0){
        echo "<script>
                alert('Username already exists');
                window.location.href = 'register.php';
              </script>";
        exit;
        
    }
    else{
    $insert="INSERT INTO admins (username,password) VALUES ('$username','$password')";
    $result=$conn->query($insert);
    if($result){
        echo "<script>alert('Registration successful');</script>";
        header("Location: login.php");
    }
    else{
        echo "<script>alert('Error in registration');</script>";
    }
}
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registertion</title>
</head>
<body>
<style>
     body{
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
        form{
            display: flex;
            flex-direction: column;
            width: 400px;
            margin:0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
        }
        h2{
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"]{
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
        }

        label{
            margin-bottom:5px;
            font-weight:bolder;
            font-size: large;
        }
        input[type="checkbox"]{
            margin-bottom: 10px;
        }
        p{
            margin: 0;
            font-size: 14px;
            color: #555;
        }
        input[type="submit"]{
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="reset"]{
            padding: 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #btns{
            display: flex;
            flex-direction: row;
            font-size: 20px;
        }
</style>
<form  method="POST">
        <h1>Student Management System</h1>
        <h2>Register</h2>
        <label for="username">UserName</label>
        <input type="text" name="username" id="sname" autocomplete="off" placeholder="Enter your Username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter your Password" required>
        <div id="btns">
        <input type="checkbox"   onclick="togglePassword()">
        <span id="Span" style="display: block;color:red;">ShowPassword</span>
        </div>
        <input type="submit" value="Register">
        <input type="reset" value="Reset">
        <center ><p style="font-size:20px;">Already have an account? <a style="font-size:20px;" href="login.php">Login</a></p></center>
       
    </form>
<script>
    function togglePassword(){
        var a=document.getElementById("password");
        var b=document.getElementById("Span");
        if(a.type==="password"){
            a.type="text";
            b.style.display="none";

        }
        else{
            a.type="password";
            b.style.display="block";
        }
    }
</script>
</body>
</html>