<?php
include'connect.php';

$id=$_GET['id'];

if (isset($_POST['submit']))
    {

        
        $paragraph=$_POST['paragraph'];
        $sql = "UPDATE about_us SET paragraph='$paragraph' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) 
        {
                echo "New record updated successfully";
                header('Location:about_us.php');
        }
         else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 

        }
?>
