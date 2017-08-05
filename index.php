    
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
                    <li><a href="#index.php">HOME</a></li>
                    <li><a href="delhi.php">DELHI</a></li>
                    <li><a href="rajasthan.php">RAJASTHAN</a></li>
                    <li><a href="kerala.php">KERALA</a></li>
                     <li><a href="#about">ABOUT</a></li>
                    <li><a href="#contact">CONTACT US</a></li>

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
     <!--END NAV SECTION -->

     
    <div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
         <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active" >
            
                            <img src="assets/img/india_gate.jpg" alt="india_gate" style="position:relative;width:100%;margin:auto;display:block;height:475px;" />
                            <div class="carousel-caption">
                                <h4 class="back-light">INDIA GATE<br>
<i>Did You Know?<br>
India Gate is counted among the largest war memorials in India.</i></h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/jal_mahal.jpg" alt="jal_mahal" style="position:relative;width:100%;margin:auto;display:block;height:475px;" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">JAL MAHAL.<br><i>Jal Mahal is an abandoned palace set in the middle of the Man Sagar Lake in Jaipur in the state of Rajasthan.</i>

</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/athirapally2.jpg" alt="gate_way_of_india" style="position:relative;width:100%;margin:auto;display:block;height:475px;" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">അതിരപ്പിള്ളി വെള്ളച്ചാട്ടം<br><i>Athirappilly Fall is the most famous waterfall of Kerala, situated in Ayyampuzha in Aluva Taluk.</i></h4>
                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                </div>
                 
            </div>
        </div>
    </div>
         </div>
    
    <section  id="project">
           <div class="container">
<div class="row text-center">
                <div class="text-center">
             <form method="post" action="delhi.php">      
                    <div class="col-md-4 col-sm-4 ">
                        <a href="delhi.php" ><img class="img-circle" src="assets/img/delhi.png" alt="josu jacob" style="position:relative; height:150px;"></a>
                         <h4>  <strong><i><u> PLACES TO VISIT :</u></i></strong></h4><br>
                 <ul>
                 <li><p>INDIA GATE</p></li>
                 <li><p>HUMAYUN'S TOMB</p></li>
                     <li><p>QUTUB MINAR</p></li>
                     <li><p>RED FORT</p></li>
                     <li><p>LOTUS TEMPLE</p></li>
                 
                 
                 
                 </ul>  <br><br><br><br><br><br><br><br> 
                        <div class="form-group" style="right:5px;position:absolute;">
                                    <button type="submit" class="btn btn-danger">Read More....</button>
                                </div>   
                
                    </div>
                </form>
                    
                <form method="post" action="rajasthan.php">    
                    
                    <div class="col-md-4 col-sm-4 ">
                        <a href="rajasthan.php" ><img class="img-circle" src="assets/img/rajasthan.png" alt="jerin thomas"  style="position:relative; height:150px;"></a>
                          <h4><strong><i><u> PLACES TO VISIT :</u></i></strong></h4><br>
                 <ul>
                 <li><p>AMBER FORT</p></li>
                 <li><p>JAISALMER</p></li>
                     <li><p>JODHPUR</p></li>
                     <li><p>JAL MAHAL</p></li>
                     <li><p>SAM SAND DUNES</p></li>
                    <li><p>GADSISAR LAKE</p></li>
                 
                 
                 </ul>  <br><br><br><br><br>
                          <div class="form-group" style="right:5px;position:absolute;">
                                    <button type="submit" class="btn btn-danger">Read More....</button>
                                </div>
                           
                    </div>
                </form>
                    
                <form method="post" action="kerala.php">    
                     <div class="col-md-4 col-sm-4 ">
                        <a href="kerala.php" ><img class="img-circle" src="assets/img/kerala3.png" alt="safin chowdhury"  style="position:relative; height:150px; border-radius:10px;"></a> 
                         <h4><strong><i><u> PLACES TO VISIT :</u></i></strong></h4><br>
                 <ul>
                 <li><p>MUNNAR</p></li>
                 <li><p>ATHIRAPALLY FALLS</p></li>
                     <li><p>KUTTANAD</p></li>
                     <li><p>KOCHI</p></li>
                     <li><p>WAYANAD</p></li>
                    <li><p>IDUKKi</p></li>
                      <li><p>KOVALAM BEACH</p></li>
                      <li><p>VARAKALA BEACH</p></li>
                 
                 </ul>
                         <div class="form-group"  style="right:5px;position:absolute;">
                                    <button type="submit" class="btn btn-danger">Read More....</button>
                                </div>
                    </div>
                </form>    
                    
                     
                </div>
                  </div>
               </div>
      </section>
    
    
     <!--END HOME SECTION-->


    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <br><br>
   

    <!--ABOUT SECTION-->
    <section  id="about">
    <div class="col-md-4 col-sm-4 alert-success" style="position:relative; line-width:100px;text-align:centre;width:100%;">
                            <h4 style="text-align:center;">Who We Are ?</h4>
                            <p>Kayak can also help you bite the bullet and buy your ticket, or not, with its "price predictor," which forecasts whether fares will go up or down. Enter your desired itinerary and the site will return a list of flight options, along with a recommendation to either buy now or wait for a fare drop. But the tool is not omniscient. Predictions appear with confidence rates and are limited to certain cities, round-trip, coach flights and specific time frames depending on your departure and arrival cities.</p>
                       
                            
                    </div>
    
           <div class="container">
<div class="row text-center">
                <div class="text-center">
                   
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/contact3.jpg" alt="josu jacob" style="position:relative; height:150px;">
                           <h3><strong>Josu Jacob</strong> </h3>
                       <p>
                               Jamia Hamdard University.
                               fourth Year (cse).
                            </p>
                            
                    </div>
                   
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/contact2.jpg" alt="jerin thomas"  style="position:relative; height:150px;">
                           <h3><strong>Jerin Thomas</strong> </h3>
                           <p>
                               Jamia Hamdard University.
                               fourth Year (cse).
                            </p>
                          
                    </div>
                    
                     <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" src="assets/img/contact1.jpg" alt="safin chowdhury"  style="position:relative; height:150px;">
                           <h3><strong>Safin Chowdhury</strong> </h3>
                           <p>
                                Jamia Hamdard University.
                                fourth Year (cse).
                            </p>
                          
                    </div>
                    
                    
                     
                </div>
                  </div>
               </div>
      </section>
    <!--END ABOUT SECTION-->
    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--CONTACT SECTION-->
    <section  id="contact">
           <div class="container">
<div class="row text-center">
                <div class="text-center" style="height:50px;">
                    <div class="col-md-6 col-sm-6 alert-danger">
                           <h4>OUR LOCATION:</h4>
                 <br><br>
                    <p>
                         <strong> Address: </strong> &nbsp;G2 B-1/8, DLF COLONY, DILSHAD EXTENSION 2, PIN 201005.  
                        <br>
                        VISITING HOURS: 10:00am - 6:00pm <br><br><br><br><br>
                                      
                    </p>

                </div>
    <form action="contact.php" method="post">
                   <div class="col-md-6 col-sm-6 alert-danger">
                            <h4>CONTAC US:</h4>
                 
                    <p>
                         <strong> ENTER IN ALL YOUR QUERIES !!! </strong>   
                    </p>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="email_id" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="message"  id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Submit Request</button>
                                </div>
                            </div>
                        </div>
                            
                            
                    </div>
                    
                    </form>                 
                </div>
                  </div>
               </div>
      </section>
    <!--END CONTACT SECTION-->
    
    
    
    
  
    <!--FOOTER SECTION -->
    <div id="footer">
        2017 www.getaways@india.co.in | All Right Reserved
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
