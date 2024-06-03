<?php
$name=$email=$number=$subject=$date=$time=$department="";
$nameerr=$emailerr=$numbererr=$subjecterr=$dateerr=$timeerr=$departmenterr="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$SERVERNAME="localhost";
	$USERNAME="root";
	$PASSWORD="";
	$DATABASE="rajeev";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$subject=$_POST['subject'];
	$date=$_POST['date'];

	$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

	if(isset($_POST["department"])){
		$department=$_POST['department'];
		if(isset($_POST['time'])){
			$time=$_POST['time'];
		if($department == "cardiology"){
$sql="INSERT INTO `cardiology`(`sno`, `name`, `email`, `number`, `subject`, `date`, `time`) VALUES (null,'$name','$email','$number','$subject','$date','$time');";
$result=mysqli_query($conn,$sql);
		}
		else if($department == "dermatologyandcosmetology"){
$sql="INSERT INTO `dermatologyandcosmetology`(`sno`, `name`, `email`, `number`, `subject`, `date`, `time`) VALUES (null,'$name','$email','$number','$subject','$date','$time');";
$result=mysqli_query($conn,$sql);
		}
		else if($department == "generalsurgery"){
$sql="INSERT INTO `generalsurgery`(`sno`, `name`, `email`, `number`, `subject`, `date`, `time`) VALUES (null,'$name','$email','$number','$subject','$date','$time');";
$result=mysqli_query($conn,$sql);
		}
		else if($department == "healthcheckuppackages"){
$sql="INSERT INTO `healthcheckuppackages`(`sno`, `name`, `email`, `number`, `subject`, `date`, `time`) VALUES (null,'$name','$email','$number','$subject','$date','$time');";
$result=mysqli_query($conn,$sql);
		}
		else if($department == "neurology"){
$sql="INSERT INTO `neurology`(`sno`, `name`, `email`, `number`, `subject`, `date`, `time`) VALUES (null,'$name','$email','$number','$subject','$date','$time');";
$result=mysqli_query($conn,$sql);
		}
	}
	}


}


?>
<!DOCTYPE html>
<html> 
<head>
	<title> Benavolence Hospital | Appointment </title>


	
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

		
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

	
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/footer.css">

	
		<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

		
		<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
	<div class="wrapper">
	
	<div class="header-v1">

	<div class="topbar-v1">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	
	</div>
	</div>
	</div>
	</div>


				<div class="navbar mega-menu" role="navigation">
				<div class="container">
				
				<div class="res-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<div class="navbar-brand">
					<img src="C:\Users\DELL\Downloads\Hospital-Management-Html-master\Hospital-Management-Html-master\assets\img\Benevolence logo white bg.png" alt="Logo"  style="width: 300px; height: 50px;"/>
				</a>
				</div>
				</div>
				<div class="collapse navbar-collapse navbar-responsive-collapse">
				<div class="res-container">
				<ul class="nav navbar-nav">
					<li class="mega-menu-fullwidth">
						<a href="about.php" >
						ABOUT US
						</a>	
						</li>
						
						<li class="mega-menu-fullwidth">
						<a href="doctors.php" >
						DOCTORS
						</a>
		
						</li>
						<li class="mega-menu-fullwidth">
							<a href="pharma.php" >
							PHARMACY
							</a>
			
							</li>
						
						<li class="mega-menu-fullwidth">
						<a href="gallery.php" >
						GALLERY
						</a>
		
						</li>
						
						<li class="mega-menu-fullwidth">
						
					
						
						
						<li class="mega-menu-fullwidth">
						
					
		
						
						<li class="mega-menu-fullwidth">
						<a href="appointment.php">
						BOOK APPOINTMENT
						</a>
		
						</li>
						<li class="mega-menu-fullwidth">
						<a href="appoinmenthistoy.html" >
						APPOINTMENT FEEDBACK
						</a>	
						</li>
						<li class="mega-menu-fullwidth">
							<a href="Aitool link">
							AI TOOL
							</a>
			
							</li>
					
		
						</ul>
		
						</div>
						</div>
						</div>
						</div>
						</div>
	






	
	<div class="container content">
	<div class="row " style="margin-bottom: 30px;">
	<div class="col-md-9 " style="margin-bottom: 30px;">
	<div class="headline"><h2>Appointment Form</h2></div>

			
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="sky-form sky-changes-3">
				<fieldset>
				<div class="row">
				<section class="col col-6">
				<label class="label">Name</label>
				<label class="input">
				<i class="icon-append fa fa-user"></i>
				<input type="text" name="name" id="name" required>
				</label>
				</section>
				<section class="col col-6">
				<label class="label">E-mail</label>
				<label class="input">
				<i class="icon-append fa fa-envelope-o"></i>
				<input type="email" name="email" id="email" required>
				</label>
				</section>
				</div>
				<section>
					<label class="label">Mobile Number</label>
					<label class="input">
					<i class="icon-append fa fa-phone"></i>
					<input type="text" name="number" id="number" required>
					</label>
					</section> 	
	

				<section>
				<label class="label">Purpose Of Appointment</label>
				<label class="input">
				<i class="icon-append fa fa-tag"></i>
				<input type="text" name="subject" >
				</label>
				</section>

				
				<section>
				<label class="select">
				<select name="department" required>
				<option value="cardiology">Cardiology</option>
				<option value="dermatologyandcosmetology">Dermatology and Cosmetology</option>
				<option value="generalsurgery">General Surgery</option>
				<option value="healthcheckuppackages">Health Checkup Packages</option>
				<option value="neurology">Neurology</option>
				</select>
				<i></i>
				</label>
				</section>
				<div class="row">
				<section class="col col-6">
				<label class="date">Select Date</label>
				<label class="input">
				<i class="icon-append fa fa-calendar"></i>
				<input type="date" name="date" required>
				</label>
				</section>
				<section class="col col-6">
				<label class="time">Select Time</label>
				<label class="select">
				<select name="time" required>
				<option value="8am_10am">8 AM - 10 AM Slot</option>
				<option value="10am_12pm">10 AM - 12 PM Slot</option>
				<option value="12pm_2pm">12 PM - 2 PM Slot</option>
				<option value="2pm_4pm">2 PM - 4 PM Slot</option>
				<option value="4pm_6pm">4 PM - 6 PM Slot</option>
				<option value="6pm_8pm">6 PM - 8 PM Slot</option>
				<option value="8pm_10pm">8 PM - 10 PM Slot</option>
				</select>
				<i></i>
				</label>
				</section>
				</div>
				<div class="alert alert-success successBox">
				<button type="button" class="close" onclick="showMsg(1);">x</button>
				<strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link"> Your Appointment has been booked successfully.</span>
				</div>

				</fieldset>

				<footer>
				<button type="submit" value="submit" class="btn-u">BOOK APPOINTMENT</button>
				</footer>


				</form>
				</div>

						<div class="col-md-3" style="margin-top: 56px;">
						\
						<div class="headline"><h2>Appointment Notes</h2></div>
						<p> You Only Can Book Your Appointment Between <strong>8 AM to 10 PM.</strong> </p>
						<p> In Other Times You Can Call Our Ambulance Which Is Available 24/7. </p>


						<div class="headline" style="margin-top: 20px;"><h2>Business Hours</h2></div>
						<ul class="list-unstyled " style="margin-bottom: 30px;">
						<li><strong>Monday-Saturday:</strong> 24/7 Available.</li>
						<li><strong>Sunday:</strong> 4 AM to 11 PM.</li>
						</ul>

					
						<div class="headline"><h2>Why Choose Us?</h2></div>
						<p>All healthcare facilities can be accessed here under one roof, making Benavolence Hospital a one point contact for all your healthcare needs.</p>
						<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
						<li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
						<li><i class="fa fa-check color-green"></i> Multiple Options For Treatment.</li>
						</ul>
						</div>
						</div>
						</div>


	
		<div class="footer-v1">
		<div class="footer">
		<div class="container">
		<div class="row">
	
		<div class="col-md-3 " style="margin-bottom: 40px;">
			<img id="logo-footer" class="footer-logo" src="C:\Users\DELL\Downloads\Hospital-Management-Html-master\Hospital-Management-Html-master\assets\img\Benevolence logo black bg.png" alt=""style="width: 250px; height: 40px;"/></a>
		<p>At Benavolence Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually exclusive when it comes to healthcare delivery.</p>
		<p>Our mission is to deliver high quality, affordable healthcare services to the broader population in India.</p>
		</div>

		
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="posts">
		<div class="headline"><h2>Latest Posts</h2></div>
		<ul class="list-unstyled latest-list">
	
		<a href="gallery.php">Latest Images</a>
		<small>October 5, 2023</small>
		</li>
		<li>
		<a href="terms.php">Terms and Conditions</a>
		<small>October 5, 2023</small>
		</li>
		</ul>
		</div>
		</div>

	
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="headline"><h2>Useful Links</h2></div>
		<ul class="list-unstyled link-list">
		<li><a href="about.php">About us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="Contact.php">Contact us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="appointment.php">Book Appointment</a><i class="fa fa-angle-right"></i></li>
		</ul>
		</div>
		<div class="col-md-3 map-img " style="margin-bottom: 40px;">
		<div class="headline"><h2>Contact Us</h2></div>
		<address class="" style="margin-bottom: 40px;">
		Benavolence Hospital <br />
		Bengaluru, IN <br />
		Phone: 886 666 00555 <br />
		Email: Benavolecehospital@gmail.com 
		</address>
		</div>
		</div>
		</div>
		</div>

		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<p>
		2023 &copy; All Rights Reserved.
		<a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms of Service</a>
		</p>
		</div>

	
		<div class="col-md-6">
		<ul class="footer-socials list-inline">
		<li>
		<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
		<i class="fa fa-skype"></i>
		</a>
		</li>
		<li>
		<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
		<i class="fa fa-google-plus"></i>
		</a>
		</li>
		<li>
		<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
		<i class="fa fa-linkedin"></i>
		</a>
		</li>
		<li>
		<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
		<i class="fa fa-pinterest"></i>
		</a>
		</li>
		<li>
		<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
		<i class="fa fa-twitter"></i>
		</a>
		</li>
		</ul>
		</div>
	
		</div>
		</div>
		</div>
		</div>
		
</div>
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	function showMsg(flag){
	if(flag==0){
	$('.successBox').css('display', 'block');
	}else{
	$('.successBox').css('display', 'none');
	}
	}
	</script>

</body>
</html>
