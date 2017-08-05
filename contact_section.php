<?php
include "nav.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>contact_us</title>
</head>
<body>
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

        <!--END ABOUT SECTION-->
    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
</body>
</html>
