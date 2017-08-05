<?php


@$conn = mysqli_connect('localhost','root','Josujacob1@','travel');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
//echo "connected succesfully";
?>