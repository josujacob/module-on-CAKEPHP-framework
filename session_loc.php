<?php
	
	session_start();
	$p_name = $_POST['p_name'];

	include 'connect.php';
	$sql="SELECT * FROM places WHERE p_name='$p_name'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$p_id=$row['p_id'];
	echo $_SESSION['p_id'] = $p_id;


	header('Location:locations2.php');
?>