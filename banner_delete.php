<?php
include'connect.php';

$id=$_GET['id'];

$sql="SELECT * from banner where id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$filename="C:/xampp/htdocs/project/travel/banner/".$row['image'];
unlink($filename);


@$sql1 = "DELETE FROM banner WHERE id='$id'";

if ($conn->query($sql1) === TRUE) {
    echo "The record has been deleted";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
} 


header('Location:banner.php');
?>


