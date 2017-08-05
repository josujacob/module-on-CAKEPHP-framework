<?php
include'connect.php';
$p_id=$_GET['p_id'];




$sql2="SELECT * FROM places WHERE p_id='$p_id'";
$result2=mysqli_query($conn,$sql2);
$row=mysqli_fetch_assoc($result2);

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
      <title>GetAways@India</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    
     <link rel="SHORTCUT ICON"  href="assets/img/logo.jpg">
    <title></title>
        
    <link href="control.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


  
</head>

<body>
 <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="index.php"><img src="assets/img/logo3.png" height="50px;"></a> 
                <a class="navbar-brand" href="index.php">GET AWAYS @ INDIA</a>
               
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                     <li><a>WELCOME ADMIN!!!</a></li>
                     <li><a href="logout.php" style="background:#E74C3C;border-radius:10px; color:white">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    

<div id="mySidenav" style="background:linear-gradient(to bottom, #f0f2f0, #000c40); color: black">
  <a href="msg.php">Messages</a>
  <a href="banner.php">Banner_edit</a>
  <a href="places.php">Places_list</a>
  <a href="locations.php">Locations</a>
   <a href="about_us.php">About Us</a>
</div>
<br>
<div class="container">
  <div class="row text-center">
      <div class="col-md-offset-2" style="background:linear-gradient(to bottom,#00d2ff, #928dab); color: black; border-radius: 10px" >
  
<!-- Mixins-->
<!-- Pen Title-->
  
    <h1 class="title">UPDATE</h1>
      <div  class="col-md-12">
        <div class="row text-center" >
             <span class="line-sep " >
        ----------X------------X----------X-------------X------------X----------X-------------X------------X----------X------------X------------X----------X------------X------------X----------X------------
    </span>
        </div>
    </div>
    <br>
    <form method="post" action="places_edit2.php?p_id=<?php echo $p_id?>" enctype="multipart/form-data">

    <div class="input-container" style="padding: 30px;">
        <br>  <img src="places/<?php echo $row['p_image']?>" width="200px" height="200px">
              <br>    <h4 style="float: left">Edit Image :</h4><br><br>
              <br><input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
              <input type="file" name="image"/>
      
      </div>
      <br>
 
 <div class="input-container" style="padding: 20px;">
  <h4 style="float: left">Edit Place:</h4><br><br>
      <br> <input type="text" name="p_name" class="col-md-2" value="<?php echo $row['p_name'];?>" required />
      
      </div>
      <br>
      
     <br> <div class="input-container" style="padding-left: 20px;">
       <h4 style="float: left">Edit Description:</h4><br><br>
       <textarea name="p_description" class="col-md-10"  required /><?php echo $row['p_description'];?></textarea>
      
      </div>

      <br><div class="input-container">
        <br><br>

       <br> <input type="submit" name="submit" value="UPDATE"/><br><br>
    </form>
  </div>
 


</body>
</html>
