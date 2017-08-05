<?php
    include"connect.php";
    $id=$_GET['l_id'];
  
    if (isset($_POST['submit']))
{
        $target = "locations/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $l_description=$_POST['l_description'];
        $l_name=$_POST['l_name'];
        


        
        if($image==="")
   {
            $sql="UPDATE locations SET l_description='$l_description',l_name='$l_name' where l_id=$id";
             if ($conn->query($sql) === TRUE) 
        {
                echo "Record updated successfully (no image)";
                header('Location:locations2.php');
        }
         else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 

    }

        else
    {       
                  $sql="SELECT * from locations where l_id='$id'";
                  $result=mysqli_query($conn, $sql);
                  $row=mysqli_fetch_assoc($result);

            $filename="C:/xampp/htdocs/project/travel/locations/".$row['l_image'];
            unlink($filename);

            $sql1="UPDATE locations SET l_image='$image', l_description='$l_description',l_name='$l_name' where l_id=$id";
             if ($conn->query($sql1) === TRUE) 
        {
                echo "Record updated successfully (image)";
                header('Location:locations2.php');
        }
         else {
                    echo "Error: " . $sql1 . "<br>" . $conn->error;
                } 

                 if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
                    {
                       echo "uploaded successfully";
                       header('Location:locations2.php');
                    }
                else
                     {
                        echo "error ".$conn->error;   
                     }
  
    }



}
?>

