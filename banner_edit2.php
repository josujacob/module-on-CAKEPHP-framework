<?php
    include"connect.php";
    $id=$_GET['id'];
    $sql="SELECT * from banner where id='$id'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    if (isset($_POST['upload']))
{
        $target = "banner/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $description=$_POST['description'];

        if($image==="")
   {
            $sql="UPDATE banner SET description='$description' where id=$id";
             if ($conn->query($sql) === TRUE) 
        {
                echo "New record updated successfully";
                header('Location:banner.php');
        }
         else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 

    }

        else
    {   
            $filename="C:/xampp/htdocs/project/travel/banner/".$row['image'];
            unlink($filename);

            $sql="UPDATE banner SET image='$image', description='$description' where id=$id";
             if ($conn->query($sql) === TRUE) 
        {
                echo "New record updated successfully";
                header('Location:banner.php');
        }
         else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 

                 if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
                    {
                       echo "updated successfully";
                       header('Location:banner.php');
                    }
                else
                     {
                        echo "error ".$conn->error;   
                     }
  
    }



}
?>

