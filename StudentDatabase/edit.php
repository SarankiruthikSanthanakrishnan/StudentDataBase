<?php 
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id='$id'");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $name=$_POST['sname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $update="UPDATE students SET name='$name',age='$age',email='$email' WHERE id='$id'";
    $result=$conn->query($update);
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student DataBase</title>
    <link rel="icon" href="image.png">
</head>
<body>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
        }
        label{
            margin-bottom:5px;
            font-weight:bolder;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"]{
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"]{
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: yellow;
            color:black;
        }
        span{
            color: red;
        }  
        table{
            margin: 0 auto;
            width: 80%;
            border: 3px solid #ddd;
            border-collapse:collapse;
            margin-top: 20px;
        }
        th, td{
            padding: 10px;
            text-align: left;
            font-size: 22px;
            border-bottom: 1px solid #ddd;
        }
        th{
            background-color:blue;
            font-weight: bold;
            color:white;
        }
        button{
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            
        }
        button a{
            text-decoration: none;
            color:white;
        }
        </style>
    <form method="POST">
        <h1>Student Management System</h1>
        <label for="sname">Student Name <span>*</span></label>
        <input type="text" name="sname" id="sname" value="<?php echo $row['name'];?>" autocomplete="off" required>
        <label for="age">Age of the Student <span>*</span></label>
        <input type="number" name="age" id="age" value="<?php echo $row['age'];?>" autocomplete="off" required>
        <label for="email">Email of the Student/Parent <span>*</span></label>
        <input type="email" name="email"  id="email" value="<?php echo $row['email'];?>" autocomplete="off" required>
        <input type="submit" value="Update Details">
    </form>
    </body>
</html>
