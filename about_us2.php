<?php
    
    if (isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost" , "root" , "Josujacob1@" , "travel");
        $paragraph=$_POST['paragraph'];
        // $description = mysqli_real_escape_string($conn, $_POST['description']);

        $sql = "INSERT INTO about_us (paragraph) VALUES ('$paragraph')";
        // mysqli_query($conn , $sql); //insert images into image table.

        if ($conn->query($sql) === TRUE) {
         echo "Paragraph added successfully";
         header('Location:about_us.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
        
    }
?>
