<?php

$price=$present="";
$priceerr=$presenterr="";
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="rajeev";
$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

$query = "select * from orders;";
$result = mysqli_query($conn,$query);

if($_SERVER["REQUEST_METHOD"] == "POST"){


$price=enterdata($_POST['price']);


if(isset($_POST['present'])){

    $present=enterdata($_POST['present']);
  for($i=1;$i<25;$i++){
    $n="SELECT  `medicine_name` FROM `orders` WHERE sno=$i;";
    $sql="UPDATE `orders` SET `price`='$price',`Availability`='$present' WHERE sno=$i;";
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
    <title>Benevolence Pharma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(252, 252, 252);
        }

        header {
            text-align: right;
            padding: 10px;
            background-color: aqua;
            color: rgb(82, 82, 82);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tbody tr:hover {
            background-color: #f5f5f5;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .submit-btn {
            background-color: aqua;
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
        <h1>Benevolence Pharma</h1>
    </header>
    <div class="container">
        <h2>Medicine List</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <table>
            <thead>
                <tr>
                    <th>Medicine Name</th>
                    <th>Medicine Number</th>
                    <th>Patient Name</th>
                    <th>Quantity</th>
                    <th>Price (₹)</th>
                    <th>Availability</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
?>
                 
<td><?php echo $row['medicine_name']; ?></td>
<td><?php echo $row['medicine_number']; ?></td>
<td><?php echo $row['patient_name']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td contenteditable="true"><input type="text" value="100" name="price"></td>
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
    </div>
    <script>
    

     
    const submitButtons = document.querySelectorAll('.submit-btn');

    submitButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const row = button.closest('tr');
            const availabilitySelect = row.querySelector('select');
            const priceInput = row.querySelector('input[type="text"]');

            if (availabilitySelect.value === '' || priceInput.value === '') {
                alert('Both availability and price must be filled.');
            } else {
                // Perform your submission logic here
                alert('Data submitted for this patient.');
            }
        });
    });
</script>

    </script>
</body>
</html>
