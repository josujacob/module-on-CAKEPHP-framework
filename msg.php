<?php  
include 'session.php';  
include 'connect.php';
@$sql="SELECT * FROM contact_us "; 
@$res = mysqli_query($conn, $sql);
@$row= mysqli_fetch_assoc($res);
@$idd= $row['id'];

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
    
    

<div id="mySidenav" style="background:linear-gradient(to bottom, #f0f2f0, #000c40);">
  <a href="msg.php">Messages</a>
  <a href="banner.php">Banner_edit</a>
  <a href="places.php">Places_list</a>
  <a href="#">Contact List</a>
</div>
<br><br><br>
<div class="container">
  <div class="row text-center">
      <div class="col-md-offset-2" style="color: black; border-radius: 10px" >
  
<table width="100%" align="center">


<h2 > USER_MESSAGE LIST </h2>  
<tr>
    
  <th>NAME</th>
  <th>EMAIL ID</th>
  <th>MESSAGE</th>
  <th>ACTIONS</th>
</tr>

<?php
$sql="SELECT * FROM contact_us ";  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>   

  
<tr>
  
  <td><?php echo $row["contact_name"]?></td>
  <td><?php echo $row["email_id"] ?></td>
  <td><?php echo $row["message"] ?></td>
  <td> <a onclick="return confirm('Do you want to delete this record ?')" href="msg_del.php?id=<?php echo $row['id']?>"><button>delete</button></a> 
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






  
