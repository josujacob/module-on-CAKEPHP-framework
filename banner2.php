<?php
    
    if (isset($_POST['upload']))
    {
        $target = "banner/".basename($_FILES['image']['name']);
        
        $conn = mysqli_connect("localhost" , "root" , "Josujacob1@" , "travel");
        $image = $_FILES['image']['name'];
        $description=$_POST['description'];
        // $description = mysqli_real_escape_string($conn, $_POST['description']);

        $sql = "INSERT INTO banner (image,description) VALUES ('$image','$description')";
        // mysqli_query($conn , $sql); //insert images into image table.

        if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
        
        //now lets move data to folder images.
        if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            echo "uploaded successfully";
            header('Location:banner.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
    }
?>
