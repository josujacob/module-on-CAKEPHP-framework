<?php
include'connect.php';

$id=$_GET['id'];


$sql="SELECT * FROM contact_us WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($res);


$sql1 = "DELETE FROM contact_us WHERE id='$id'";

if ($conn->query($sql1) === TRUE) {
    echo "The record has been deleted";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
} 

header('Location:msg.php');
?>


