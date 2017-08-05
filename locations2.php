<?php  
include 'session.php';  
include 'connect.php';

  session_start();
  if(!isset($_SESSION['p_id']))
  {
   header('location: locations.php');
  die();
  } 
  
  else 
    {$p_id = $_SESSION['p_id'];}      



// $p_name=$_POST['p_name'];

@$sql="SELECT p_id FROM places where p_name='$p_name' "; 
@$res = mysqli_query($conn, $sql);
@$row= mysqli_fetch_assoc($res);
// $p_id=$row['p_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
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

<style>
body{
  height:20px;
  background-image: url("bg2.jpg");
}
table {

  background:url(bg3.jpg);
    background-size:contain;
    background-repeat:no-repeat;
    border-collapse: collapse;
    width: 70%;
    opacity: 0.8;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

h2{
  text-align: center;
}
a{

  color: red;
}

a button{
color: black;
background-color:blanchedalmond; 

}
button: hover{

  background-color: brown;
}
</style>
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
    
    

<div id="mySidenav" style="background:linear-gradient(to bottom, #f0f2f0, #000c40);color: black">
  <a href="msg.php">Messages</a>
  <a href="banner.php">Banner_edit</a>
  <a href="places.php">Places_list</a>
  <a href="locations.php">Locations</a>
   <a href="about_us.php">About Us</a>
</div>
<br>
<div class="container">
  <div class="row text-center">
      <div class="col-md-offset-2" style="color: black; border-radius: 10px" >
  
<h2> LOCATION ADD </h2>  
    <div  class="col-md-12">
        <div class="row text-center" >
             <span class="line-sep " >
        ----------X------------X----------X-------------X------------X----------X-------------X------------X----------X------------X------------X----------X------------X------------X----------X------------
    </span>
        </div>
    </div>
    <br>
        <div style="background:linear-gradient(to bottom,#00d2ff, #928dab);color: black; padding: 20px;" >
        <hr>
        
        <form  action="locations3.php?p_id=<?php echo $p_id?>" method="post" enctype="multipart/form-data">
        <h3 style="float: left">Add a location</h3><br><br>
        <br><input style="float: left" type="text" name="l_name" placeholder="location name" required><br>
           <br><h3 style="float: left">Add an image</h3><br><br>
            <br><input type="hidden" name="MAX_FILE_SIZE" value="4100000">
            <input type="file" name="l_image" required/>
      
           <h3 style="float: left">Add a description</h3><br><br>
        <br><textarea class="col-md-12" rows="4" name="l_description" placeholder="Enter location description....." required ></textarea><hr>
        <br><hr>  <input type="submit" value="submit" name="submit">
        </form>
     </div>

    <br><br>
    <div  class="col-md-12">
        <div class="row text-center" >
             <span class="line-sep " >
        ----------X------------X----------X-------------X------------X----------X-------------X------------X----------X------------X------------X----------X------------X------------X----------X------------
    </span>
        </div>
    </div>
    <br><br>

<h2>LOCATION DETAILS </h2>    
<table class="col-md-12" >
<tr>
  <th>UNIQUE_ID</th>
  <th>PLACE_ID</th>
  <th>LOCATIONS</th>
  <th>IMAGES</th>
  <th>DESCRIPTIONS</th>
  <th>ACTIONS</th>
</tr>

<?php 

$sql="SELECT * FROM locations INNER JOIN places ON locations.p_id='$p_id' AND places.p_id='$p_id'"; 
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
    while($row = $result->fetch_assoc()) {
?>   

<tr>
    <td><?php echo $row["l_id"] ?></td> 
    <td><?php echo $row["p_id"] ?></td>
    <td><?php echo $row["l_name"] ?></td>
   <td>  <img src="locations/<?php echo $row['l_image'];?>" width='200' height='200'></td>
  <td><?php echo $row["l_description"] ?></td>
  <td>

      <a onclick="return confirm('Are you sure you want to edit ???');" href="locations_edit.php?l_id=<?php echo $row['l_id']?>"><button>edit</button></a>

      <a onclick="return confirm('Are you sure you want to delete this entry????');" href="locations_del.php?l_id=<?php echo $row['l_id']?>" ><button>delete</button></a> 

      <br>
    </td>
</tr>
<?php 
}
}
?>
</table>







</div>
</div>
</div>
<br><br><br> 
</body>

</html>
