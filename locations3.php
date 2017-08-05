

<?php
    
    if (isset($_POST['submit']))
    {
        $target = "locations/".basename($_FILES['l_image']['name']);
        
        $conn = mysqli_connect("localhost" , "root" , "Josujacob1@" , "travel");
        $image = $_FILES['l_image']['name'];
        $description=$_POST['l_description'];
        $l_name=$_POST['l_name'];
        $p_id=$_GET['p_id'];
        // $description = mysqli_real_escape_string($conn, $_POST['description']);

        $sql = "INSERT INTO locations (l_image,l_description,l_name,p_id) VALUES ('$image','$description','$l_name','$p_id')";
        // mysqli_query($conn , $sql); //insert images into image table.


if ($conn->query($sql) === TRUE) {
    echo "uploaded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
  
        
        //now lets move data to folder images.
        if (@move_uploaded_file($_FILES['l_image']['tmp_name'] , $target))
        {
            echo "uploaded successfully";
           header('Location:locations2.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
    }
?>
