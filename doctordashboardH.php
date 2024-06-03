
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor management system</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://wallpapercave.com/wp/wp2789218.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        .logo-box {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px 20px;
            background-color: rgb(65, 64, 64);
            color: aqua;
            border-radius: 5px;
            font-size: 16px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .options {
            display: flex;
            gap: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .button:hover {
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: black;">Welcome to Doctor Management System</h1>
        <div class="options">
        <a href="patientslistH.php"><button class="button" id="doctorpageButton">Patients list</button></a>
        <a href="myappointmentsH.php">><button class="button" id="myappointmentsButton">My Appointments</button></a>
        </div>
    </div>
    <div class="logo-box">
        Benevolence Hospitals
    </div>
    <script>
        
        const doctorpageButton = document.getElementById("doctorpageButton");
        const myappointmentsButton = document.getElementById("myappointmentsButton");

        
        doctorpageButton.addEventListener("click", function() {
           
            window.location.href = "patientslistH.php"; 
        });

        myappointmentsButton.addEventListener("click", function() {
          
            window.location.href = "myappointments.php"; 
        });
    </script>

    
</body>
</html>

