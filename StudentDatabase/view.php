<?php
include "db.php";
$result=$conn->query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student DataBase</title>
    <link rel="icon" href="image.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <style>
        body{
            margin: 0;
            padding: 0;
            height: auto;
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
            background: rgba(255, 255, 255, 0.2);
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
            background: white;
            margin-bottom: 35px;
            
        }
        th, td{
            padding: 10px;
            text-align: left;
            font-size: 22px;
            border-bottom: 1px solid #ddd;
            text-align: center;
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
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            
        }
        button a{
            text-decoration: none;
            color:white;
        }

        .edit{
            background-color: green;
        }
        </style>
    <h1 style="text-align: center;">Student DataBase</h1>
    <div><a href="login.php"><button>Logout</button></a></div>

    <table>
        <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
    </tr>
    <?php
    $sno=1;
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$sno."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
        $sno++;
    }
    ?>
    </table>
</body>
</html>