<?php
include "db.php";
$name=$_POST['sname'];
$age=$_POST['age'];
$email=$_POST['email'];
$insert="INSERT INTO students (name,age,email) VALUES ('$name','$age','$email')";
$result=$conn->query($insert);

header("Location: index.php");
if($result){
    echo "<script>alert('Student added successfully');</script>";
}
else{
    echo "<script>alert('Error adding student');</script>";
}
?>