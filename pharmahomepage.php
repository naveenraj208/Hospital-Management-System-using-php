<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://img.freepik.com/free-vector/pharmacy-with-pharmacist-woman-counter-desk_107791-2214.jpg?w=2000'); 
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
            background-color: aqua;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .button:hover {
            background-color: aquamarine;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: aqua;">Welcome to Pharmacy Management System</h1>
        <div class="options">
        <a href="Pharmamedicinelist.php"> <button class="button" id="medicineButton">Medicine</button></a>
        <a href="pharmaorderlist.php">  <button class="button" id="ordersButton">Orders</button></a>
        </div>
    </div>
    <div class="logo-box">
        Benevolence Pharma
    </div>

    <script>
        
        const medicineButton = document.getElementById("medicineButton");
        const ordersButton = document.getElementById("ordersButton");

        
        medicineButton.addEventListener("click", function() {
           
            window.location.href = "Pharmamedicinelist.html"; 
        });

        ordersButton.addEventListener("click", function() {
          
            window.location.href = "pharmaorderlist.html"; 
        });
    </script>
</body>
</html>
