<!DOCTYPE html>
<html> 
<head>
	<title> Benavolence Hospital | Doctors </title>

	<style>
            table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

        </style>

		
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

	
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/footer.css">

		
		<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

		
		<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
	<div class="wrapper">
	
	<div class="header-v1">
	
	<div class="topbar-v1">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
			<ul class="list-inline top-v1-contacts">
			
			</ul>
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
				<img src="C:\Users\DELL\Downloads\Hospital-Management-Html-master\Hospital-Management-Html-master\assets\img\Benevolence logo white bg.png" alt="Logo" style="width: 300px; height: 50px;">
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
				

	<div style="text-align: center; margin-top: 50px;">
	<h2>DOCTORS</h2>
	</div>





				<div class="container content-md team-v1">
				<ul class="list-unstyled row">
				<li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
				<div style="text-align: center; margin-top: 20px;">
    <form method="POST" action="doctors.php">
        <label for="department">Search by Department:</label>
        <input type="text" name="department" id="department" placeholder="Enter department">
        <input type="submit" value="Search">
    </form>
</div>
<?php
$conn = mysqli_connect("localhost", "root", "", "rajeev");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

// Check if the search form is submitted
if (isset($_POST['department'])) {
    $searchDepartment = $_POST['department'];

    // Query to fetch doctors by department
    $sql = "SELECT * FROM doctors WHERE department LIKE '%$searchDepartment%'";
} else {
    // Default query to fetch all doctors
    $sql = "SELECT * FROM doctors";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<table class="table table-bordered">';
    echo '<tr>';
    echo '<th>SNO</th>';
    echo '<th>NAME</th>';
    echo '<th>DEPARTMENT</th>';
    echo '<th>RATING</th>';
    echo '<th>YEAR OF EXPERIENCE</th>';
    echo '<th>EMAIL</th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sno"] . "</td><td>" . $row["name"] . "</td><td>" . $row["department"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["yearofexperience"] . "</td><td>" . $row["email"] . "</td><td>";
    }

    echo '</table>';
    echo '</div>';
} else {
    echo "0 results";
}

$conn->close();
?>

				


				</div>


		<div class="footer-v1" style="margin-top: -100px;">
		<div class="footer">
		<div class="container">
		<div class="row">
	
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<img id="logo-footer" class="footer-logo" src="C:\Users\DELL\Downloads\Hospital-Management-Html-master\Hospital-Management-Html-master\assets\img\Benevolence logo black bg.png" alt=""style="width: 250px; height: 40px;"></a>
		<p>At Benavolence Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually exclusive when it comes to healthcare delivery.</p>
		<p>Our mission is to deliver high quality, affordable healthcare services to the broader population in India.</p>
		</div>
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="posts">
		<div class="headline"><h2>Latest Posts</h2></div>
		<ul class="list-unstyled latest-list">
		
		<li>
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
		Phone: 85538 25683  <br />
		Email: Benavolencehospital@gmail.com 
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
</body>



</body>
</html>
