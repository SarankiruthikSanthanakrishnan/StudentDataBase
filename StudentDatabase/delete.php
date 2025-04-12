<?php
include "db.php";
$id=$_GET["id"];
$delete="DELETE FROM students WHERE id='$id'";
$result=$conn->query($delete);
header("Location: index.php");
if($result){
    echo "<script>alert('Student deleted successfully');</script>";
}
else{
    echo "<script>alert('Error deleting student');</script>";
}
?>