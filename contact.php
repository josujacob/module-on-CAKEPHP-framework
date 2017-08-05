<?php
include "connect.php";

$username=$_POST['username'];
$email_id=$_POST['email_id'];
$message=$_POST['message'];


$sql="INSERT INTO contact_us (contact_name, email_id,message)
VALUES ('$username', '$email_id','$message')";

if ($conn->query($sql) === TRUE) {
    include"contact_message.php";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>