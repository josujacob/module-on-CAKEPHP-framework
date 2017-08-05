<?php
include'connect.php';

$id=$_GET['id'];

$sql="SELECT * from about_us where id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

@$sql1 = "DELETE FROM about_us WHERE id='$id'";

if ($conn->query($sql1) === TRUE) {
    echo "The record has been deleted";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
} 


header('Location:about_us.php');
?>


