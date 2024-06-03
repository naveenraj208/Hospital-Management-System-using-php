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
        <h1>Benevolence Hospitals</h1>
    </header>

    <nav>
    <a href="doctordashboardC.php"><button class="submit-btn" id="mydashboardButton">My Dashboard</button></a>
    <a href="myappointmentsC.php"><button class="submit-btn" id="myappointmentsButton">My Appointments ></button></a>


    </nav>

    <table>
        <thead>
            <tr>

                <th>Patient Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Date</th>
                <th>Reason</th>
                <th>Time</th>
                <th>Prescribe</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Saketh</td>
                <td>saketh@example.com</td>
                <td>+919876543210</td>
                <td>20-10-2023</td>
                <td>Fever</td>
                <td>10:30 AM</td>
                <td><button class="submit-btn" onclick="window.location.href='prescription.php'">Prescribe</button></td>
                <td>
                    <button class="submit-btn" onclick="openDropdown(this)">Edit</button>
                    <select style="display:none;">
                        <option value="admit">Admit</option>
                        <option value="icu">ICU</option>
                        <option value="ccu">CCU</option>
                        <option value="hospitalize">Hospitalize</option>
                        <option value="medicated">Medicated</option>
                        <option value="discharge">Discharge</option>
                    </select>
                </td>
                <td><button class="submit-btn" onclick="showAlert(this)">Submit</button></td>
            </tr>
            <tr>
                <td>Somnath</td>
                <td>somnath@example.com</td>
                <td>+919876543211</td>
                <td>15-10-2023</td>
                <td>Stomach ache</td>
                <td>10:30 AM</td>
                <td><a href="prescription.php"><button class="submit-btn">Prescribe</button></a></td>
                <td>
                    <button class="submit-btn" onclick="openDropdown(this)">Edit</button>
                    <select style="display:none;">
                        <option value="admit">Admit</option>
                        <option value="icu">ICU</option>
                        <option value="ccu">CCU</option>
                        <option value="hospitalize">Hospitalize</option>
                        <option value="medicated">Medicated</option>
                        <option value="discharge">Discharge</option>
                    </select>
                </td>
                <td><button class="submit-btn" onclick="showAlert(this)">Submit</button></td>

            </tr>
        </tbody>
    </table>

    <script>
        function showAlert(button) {
            button.innerHTML = "Submitted";
            button.style.backgroundColor = "aqua";
            alert("Response successfully submitted.");
        }

        function openDropdown(button) {
            var select = button.parentNode.querySelector('select');
            select.style.display = "block";
            button.style.display = "none";
        }
    </script>
</body>

</html>