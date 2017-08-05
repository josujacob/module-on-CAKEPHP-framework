    <!--HOME SECTION--><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
     <LINK rel="SHORTCUT ICON"
       href="assets/img/logo.jpg">
    <title>GetAways@India </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
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
                <a class="navbar-left" href="index.php"><img src="assets/img/logo3.png" height="25px;"></a> 
                <a class="navbar-brand" href="index.php"> GET AWAYS @ INDIA</a>
               
            </div>
            <div class="navbar-collapse collapse" >
                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="delhi.php">DELHI</a></li>
                    <li><a href="rajasthan.php">RAJASTHAN</a></li>
                    <li><a href="kerala.php">KERALA</a></li>
                     <li><a href="about_section.php">ABOUT</a></li>
                    <li><a href="contact_section.php">CONTACT US</a></li>

<?php
session_start();
if(!isset($_SESSION['username'])){
   echo'<li><a href="login.php"  style="background:#2ecc71;color:white;border-radius:10px;" >LOGIN</a></li>';
}
else{
           echo'       <li><a href="control.php">SETTINGS</a></li>';

   echo' <li><a href="logout.php" style="background:#E74C3C;color:white;border-radius:10px;">LOGOUT</a></li>';   
}
?>
                </ul>
            </div>
           
        </div>
    </div>