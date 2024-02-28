<?php

include'db.php';
if (isset($_POST['Submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $message=$_POST['message'];
    $sql="INSERT into message (name,email,phone_no,message) VALUES ('$name','$email','$phone_no','$message')";
    
    if ($conn->query($sql)===TRUE) {
        echo "message deliver";
        
    } 
    else{
        echo "Error:".$sql.'<br>'.$conn->error;

    }
    $conn->close();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to James Buchanan Pub and Restaurant</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
				<div id="contactleft">
					FLORIDA BUS<br>
(G.V. FLORIDA TRANSPORT, INCORPORATED)<br>
Barangay West Kamias, Cubao, Quezon City, Metro Manila<br>
Phone:  +63(2)3525393<br><br>

FLORIDA BUS<br>
(G.V. FLORIDA TRANSPORT, INCORPORATED)<br>
Lacson Avenue Corner Earnshaw Street, Manila, Metro Manila<br>
Florida Bus Co., Manila<br>
- (02) 743-3809; 912-5354<br>
Telephone No: (632) 781-5894<br><br>


Florida Bus Terminal in Tuguegarao City by G.V. Florida Transport, Inc.<br>
Location: Diversion Road, Pengue-Ruyu Tuguegarao City Cagayan Valley<br><br>

Contact Numbers:<br>
Florida Bus Company Tuguegarao<br>
-  +63 (078) 846 4259; (078) 846-2265<br>
				</div><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="#" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" required="required" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: john@doe.com" type="text" name="email" required="required" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Phone No:</label><br>
                            <input id="subject" class="contactform" type="number" name="phone_no" required="required" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5" required="required"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div id="footer">
	<h4>+63(2)3525393 &bull; <a href="contact-us.php">Barangay West Kamias, Cubao, Quezon City, Metro Manila  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="James Buchanan Pub and Restaurant" /></a>
	<p>&copy; Copyright 2013 Florida Bus | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
