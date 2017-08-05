<?php
include'connect.php';

$id=$_GET['l_id'];

$sql="SELECT * from locations where l_id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$filename="C:/xampp/htdocs/project/travel/locations/".$row['l_image'];
unlink($filename);


@$sql1 = "DELETE FROM locations WHERE l_id='$id'";

if ($conn->query($sql1) === TRUE) {
    echo "The record has been deleted";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
} 


header('Location:locations2.php');
?>


