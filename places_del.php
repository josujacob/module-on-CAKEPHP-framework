<?php
include'connect.php';

$id=$_GET['p_id'];

$sql="SELECT * from places where p_id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$filename="C:/xampp/htdocs/project/travel/places/".$row['p_image'];
unlink($filename);


@$sql1 = "DELETE FROM places WHERE p_id='$id'";

if ($conn->query($sql1) === TRUE) {
    echo "The record has been deleted";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
} 


header('Location:places.php');
?>


