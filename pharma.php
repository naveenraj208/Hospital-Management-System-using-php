<?php
$medicine_name=$medicine_number=$patient_name=$quantity="";
$medicine_nameerr=$medicine_numbererr=$patient_nameerr=$quantityerr="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="rajeev";

  $medicine_name=enterdata($_POST['medicine_name']);
  $medicine_number=enterdata($_POST['medicine_number']);
  $patient_name=enterdata($_POST['patient_name']);
  $quantity=enterdata($_POST['quantity']);

$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

$sql="INSERT INTO `orders` (`sno`, `medicine_name`, `medicine_number`, `patient_name`, `quantity`, `price`, `Availability`) VALUES (null, '$medicine_name', '$medicine_number', '$patient_name', '$quantity', '', '');";
$result=mysqli_query($conn,$sql);

}

function enterdata($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!DOCTYPE html>
<html> 
<head>
    <title> Benavolence Hospital | Doctors </title>


        
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
    <style>
        body {
            text-align: center;
            padding: 20px;
        }

        table {
            margin: 0 auto;
            width: 80%;
            background-color: rgb(242, 245, 245);
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        button {
            font-size: 16px;
            padding: 10px 20px;
        }
    </style>
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
    <h2>Pharmacy</h2>
    </div>





                <div class="container content-md team-v1">
                <ul class="list-unstyled row">
                <li class="col-sm-3 col-xs-6 " style="margin-bottom: 30px;">
                
<div class="container">
    <h1>Medicine Order Form</h1>
        <table border="1">
            <div class="container">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Medicine Number</th>
                            <th>Patient Name</th>
                            <th>Quantity</th>
                            <th>Price(₹)</th>
                            <th>Availability</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="medicineTable">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td><input type="text" name="medicine_name" placeholder="Medicine Name" required></td>
                            <td><input type="text" name="medicine_number" placeholder="Medicine Number" required></td>
                            <td><input type="text" name="patient_name" placeholder="Patient Name" required></td>
                            <td><input type="text" name="quantity" placeholder="Quantity" required></td>
                            <td>Price</td>
                            <td>Availability</td>
                            <td><button onclick="sendToPharmacist(this)" style="background-color: aqua;">Submit</button></td>
                        </tr>
    </form>
                    </tbody>
                </table>
                <br>
                <div>
                    <button onclick="addRow()" style="background-color: aqua;">Add Medicine</button>
                    <button onclick="submitOrder()" style="background-color: aqua;">Submit Order</button>
                </div>
                <script>
                    
                    // ...
                </script>
                <br>
                <br>
                <br>
                <h1 style="text-decoration:underline;">Your Order</h1>
                <?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "rajeev";

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch orders from the database
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Medicine Name</th>';
    echo '<th>Medicine Number</th>';
    echo '<th>Patient Name</th>';
    echo '<th>Quantity</th>';
    echo '<th>Price(₹)</th>';
    echo '<th>Availability</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['medicine_name'] . '</td>';
        echo '<td>' . $row['medicine_number'] . '</td>';
        echo '<td>' . $row['patient_name'] . '</td>';
        echo '<td>' . $row['quantity'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '<td>' . $row['Availability'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "No orders found.";
}

mysqli_close($conn);
?>
            </div>
            
        </table>
        <br>
       
        <script>
          function addRow() {
        const table = document.getElementById("medicineTable");
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td><input type="text" name="medicine_name" placeholder="Medicine Name"></td>
            <td><input type="text" name="medicine_number" placeholder="Medicine Number"></td>
            <td><input type="text" name="patient_name" placeholder="Patient Name"></td>
            <td><input type="text" name="quantity" placeholder="Quantity"></td>
            <td>Price</td>
            <td>Availability</td>
            <td><button onclick="sendToPharmacist(this)" style="background-color: aqua;">Submit</button></td>
        `;
        table.appendChild(newRow);
    }


            function sendToPharmacist(button) {
                const row = button.parentElement.parentElement;
                alert("Details have been sent to the pharmacist.");
                row.removeChild(button);
            }

            function submitOrder() {
               
                alert("Order has been submitted.");
            }
        </script>
</div>

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
