<?php
    include"connect.php";
    $id=$_GET['p_id'];
  
    if (isset($_POST['submit']))
{
        $target = "places/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $p_description=$_POST['p_description'];
        $p_name=$_POST['p_name'];
        
        
        if($image==="")
   {
            $sql="UPDATE places SET p_description='$p_description',p_name='$p_name' where p_id=$id";
             if ($conn->query($sql) === TRUE) 
        {
                echo "Record updated successfully (no image)";
                header('Location:places.php');
        }
         else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 

    }

        else
    {       
                  $sql="SELECT * from places where p_id='$id'";
                  $result=mysqli_query($conn, $sql);
                  $row=mysqli_fetch_assoc($result);

            $filename="C:/xampp/htdocs/project/travel/places/".$row['p_image'];
            unlink($filename);

            $sql1="UPDATE places SET p_image='$image', p_description='$p_description',p_name='$p_name' where p_id=$id";
             if ($conn->query($sql1) === TRUE) 
        {
                echo "Record updated successfully (image)";
                header('Location:places.php');
        }
         else {
                    echo "Error: " . $sql1 . "<br>" . $conn->error;
                } 

                 if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
                    {
                       echo "uploaded successfully";
                       header('Location:places.php');
                    }
                else
                     {
                        echo "error ".$conn->error;   
                     }
  
    }



}
?>

