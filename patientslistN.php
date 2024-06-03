<?php

$price=$present="";
$priceerr=$presenterr="";
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="rajeev";
$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

$query = "select * from neurology;";
$result = mysqli_query($conn,$query);

if($_SERVER["REQUEST_METHOD"] == "POST"){





if(isset($_POST['present'])){

    $present=enterdata($_POST['present']);
  for($i=1;$i<25;$i++){
    $n="SELECT  `name` FROM `neurology` WHERE sno=$i;";
    $sql="UPDATE `neurology` SET `Availability`='$present' WHERE sno=$i;";
    $result1=mysqli_query($conn,$sql);
    
  }
}
}
function enterdata($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Appointment</title>
    <style>
        body {
            background-image: url("https://th.bing.com/th/id/R.6917b1cdfdcc83150198376450d1b0d6?rik=HsliC%2b%2fNYan2qw&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2fd%2f7%2f8%2f302180.jpg&ehk=eFlHQHnHGsE7gzJgvG%2bbuB0PXwuzeI6oazJ5fQFqpec%3d&risl=&pid=ImgRaw&r=0");
            background-repeat: no-repeat;
            background-size: cover;
            
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #555;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.submit-btn {
            background-color:  #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <header>
        <h1>Benevolance Hospitals</h1>
    </header>

    <nav>
    <a href="doctordashboardN.php"><button class="submit-btn" id="mydashboardButton">My Dashboard </button></a>
    <a href="myappointmentsN.php"><button class="submit-btn" id="myappointmentsButton">My Appointments ></button></a>
      
        
    </nav>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <table>
        <thead>
            <tr>
                
                <th>Patient Name</th>
                <th>Date</th>
                <th>Reason</th>
                <th>Time</th>
                <th>Availability</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
?>
                 
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['time']; ?></td>
                    <td>
                        <select name="present">
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </td>
                    <td><button class="submit-btn">Submit</button></td>
                </tr>
<?php
                    }
                    ?>
        </tbody>
    </table>
                </form>
    <script>
        
        const mydashboardButton = document.getElementById("mydashboardButton");
        const myappointmentsButton = document.getElementById("myappointmentsButton");

        
    mydashboardButton.addEventListener("click", function() {
           
            window.location.href = "doctordashboard.php"; 
        });

        myappointmentsButton.addEventListener("click", function() {
          
            window.location.href = "myappointments.php"; 
        });
    </script>


</body>
</html>
