<?php
include "connect.php";
//include "session.php";
session_start();

@$username=$_POST['username'];
@$password=$_POST['password'];

$result=mysqli_query($conn,"select * from login where username='$username' and password='$password'")
    or die("invalid attemmpt".mysqli_error());

$row=mysqli_fetch_array($result);
	if($row['username']== $username && $row['password']==$password)
	{
       echo "<br><br>succesfully logged in ".$row['username'];
    		$_SESSION['username'] = $username;

        header('Location:control.php');
             
    }

     
     else {
     	echo "failed";
     	       header('Location:login.php');
     }
?>

