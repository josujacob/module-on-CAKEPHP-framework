<?php
    
    if (isset($_POST['upload']))
    {
        $target = "places/".basename($_FILES['p_image']['name']);
        
        $conn = mysqli_connect("localhost" , "root" , "Josujacob1@" , "travel");
        $image = $_FILES['p_image']['name'];
        $description=$_POST['p_description'];
        $p_name=$_POST['p_name'];
        // $description = mysqli_real_escape_string($conn, $_POST['description']);

        $sql = "INSERT INTO places (p_image,p_description,p_name) VALUES ('$image','$description','$p_name')";
        // mysqli_query($conn , $sql); //insert images into image table.


if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
  
        
        //now lets move data to folder images.
        if (@move_uploaded_file($_FILES['p_image']['tmp_name'] , $target))
        {
            echo "uploaded successfully";
            header('Location:places.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
    }
?>
