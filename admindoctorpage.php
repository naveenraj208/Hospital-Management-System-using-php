<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\Users\DELL\Downloads\Admin\Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
  table {
            border-collapse: collapse;
            width: 100%;
        }
    

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color:aqua;
        }

        .remove-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            cursor: pointer;
        }
        .doctor-management{
            margin-left: 300px;
        }
        button {
        background-color: aqua;
        color: black;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 0;
        cursor: pointer;
        margin-left:10px;
    }
    #searchBar {
            margin-top: 5px;
            padding: 8px;
          margin-left: 750px;
        }

    /* Style for the form */
    #addDoctorForm {
        display: none;
        max-width: 400px;
        margin: 0 auto;
    }

    #addDoctorForm h2 {
        color: aqua;
    }

    #addDoctorForm label {
        display: block;
        margin: 10px 0;
        color: aqua;
    }

    #addDoctorForm input {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
    }

    #addDoctorForm input[type="button"] {
        background-color: aqua;
        color: black;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 10px;
        cursor: pointer;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
body {
    position: relative;
    width: 100%;
}

.header {
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
    border-bottom: 2px solid #f1f1f1;
}
.logo {
    display: flex;
    align-items: center;
    width: 300px;
    padding-left: 40px;
}
.logo span {
    color:aqua;
}
.search--notification--profile {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: calc(100% - 300px);
    padding: 0 40px;
}
.search {
    background-color: #f1f4f8;
    border-radius: 50px;
    width: 400px;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.search input {
    background-color: transparent;
    outline: none;
    border: none;
    text-indent: 15px;
    width: 85%;
}
.search button {
    outline: none;
    border: none;
    border-radius: 50%;
    background-color: #fff;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.search button i {
    font-size: 1.1rem;
    color:aqua;
}
.notification--profile {
    display: flex;
    align-items: center;
}
.picon {
    margin-left: 20px;
    font-size: 1.1rem;
    padding: 5px;
    border-radius: 5px;
}
.lock {
    color:aqua;
    background-color:aquamarine;
}
.bell {
    color: #f1d243;
    background-color: rgba(241, 210, 67, .2);
}
.chat {
    color: #70d7a5;
    background-color: rgba(112, 215, 165, .2);
}
.profile {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}
img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.main {
    position: relative;
    width: 100%;
    min-height: calc(100vh - 60px);
}
/* sidebar */
.sidebar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    background-color: #fff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 2px solid #f1f1f1;
    transition: .3s;
}
.sidebar.active {
    width: 103px;
    overflow: hidden;
}
.sidebar.active .sidebar--item {
    display: none;
}
li {
    list-style: none;
}
a {
    text-decoration: none;
}
.sidebar--items a,
.sidebar--bottom-items a {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #000;
    padding: 10px;
    border-radius: 10px;
}
.sidebar--items a:hover,
.sidebar--bottom-items a:hover {
    background-color: aquamarine;
    color: #fff;
}
#active--link {
    background-color: aqua;
    color: #fff;
}
.sidebar--bottom-items li:last-child a {
    margin-bottom: 0;
}
.icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.3rem;
}
.icon-0 {
    color: #5073fb;
}
.icon-1 {
    color: #c5bc58;
}
.icon-2 {
    color: #a280e9;
}
.icon-3 {
    color: #85ade3;
}
.icon-4 {
    color: #e36ac8;
}
.icon-5 {
    color: #70d7a5;
}
.icon-6 {
    color: #5f5ce0;
}
.icon-7 {
    color: #e86786;
}
.icon-8 {
    color: #f1d243;
}
/* main--content */
.main--content {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: calc(100% - 300px);
    padding: 0 40px;
    overflow-y: scroll;
    transition: .3s;
}
.main--content.active {
    width: calc(100% - 103px);
}
.title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    margin-top: 30px;
}
.section--title {
    font-weight: 400;
}
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}
h1 {
    color: aqua;
}
p {
    margin-top: 10px;
}
blockquote {
    margin: 10px 0;
    padding-left: 20px;
    border-left: 2px solid aqua;
    color: #555;
}
.dropdown {
    outline: none;
    border: none;
    background-color: #f1f4f8;
    border-radius: 5px;
    width: 150px;
    padding: 5px;
}
.cards {
    display: flex;
    gap: 20px;
}
.card {
    padding: 20px;
    border-radius: 20px;
    min-width: 230px;
    height: auto;
    transition: .3s;
}
.card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.card--data {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}
.card h1 {
    font-size: 30px;
    margin-top: 10px;
}
.card--icon--lg {
    font-size: 80px;
}
.card--stats {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 5px;
}
.card--stats span {
    display: flex;
    align-items: center;
}
.card--icon {
    margin-right: 5px;
}
.stat--icon {
    color: #5f5ce0;
}
.up--arrow {
    color: #70d7a5;
}
.down--arrow {
    color: #e86786;
}
.card-1 {
    background-color: rgba(80, 115, 251, .1);
}
.card-1 .card--title {
    color: rgba(80, 115, 251, 1);
}
.card-1 .card--icon--lg {
    color: rgba(80, 115, 251, .4);
}
.card-2 {
    background-color: rgba(241, 210, 67, .1);
}
.card-2 .card--title {
    color: rgba(241, 210, 67, 1);
}
.card-2 .card--icon--lg {
    color: rgba(241, 210, 67, .4);
}
.card-3 {
    background-color: rgba(112, 215, 165, .1);
}
.card-3 .card--title {
    color: rgba(112, 215, 165, 1);
}
.card-3 .card--icon--lg {
    color: rgba(112, 215, 165, .4);
}
.card-4 {
    background-color: rgba(227, 106, 200, .1);
}
.card-4 .card--title {
    color: rgba(227, 106, 200, 1);
}
.card-4 .card--icon--lg {
    color: rgba(227, 106, 200, .4);
}
/* doctors */
.doctors--right--btns {
    display: flex;
    align-items: center;
    gap: 30px;
}
.add {
    display: flex;
    align-items: center;
    padding: 5px 10px;
    outline: none;
    border: none;
    background-color:aqua;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
.add:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.add i {
    margin-right: 10px;
    padding: 5px;
    background-color: #fff;
    border-radius: 50%;
    color: #000;
}
.doctors--cards {
    display: flex;
    gap: 20px;
}
.doctor--card {
    padding: 20px;
    border-radius: 20px;
    height: auto;
    transition: .3s;
    border: 2px solid #f1f1f1;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: .8rem;
}
.doctor--card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.img--box--cover {
    border: 1px solid aqua;
    padding: 2px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
}
.img--box {
    position: relative;
    width: 71px;
    height: 71px;
    overflow: hidden;
    border-radius: 50%;
}
.free {
    color:aqua;
}
.scheduled {
    color:aqua;
}
/* recent--patients */
.recent--patients {
    margin-bottom: 20px;
}
.table {
    height: 200px;
    overflow-y: scroll;
}
table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
}
tr {
    border-bottom: 1px solid #f1f1f1;
}
td,
th {
    padding-block: 10px;
}
.edit {
    color: #70d7a5;
    margin-right: 10px;
}
.delete {
    color: #e86786;
}
.pending {
    color: #f1d243;
}
.confirmed {
    color: #70d7a5;
}
.rejected {
    color: #e86786;
}
/* responsive starts here */
@media screen and (max-width:1350px) {
    .cards,
    .doctors--cards {
        overflow-x: scroll;
    }
}
@media screen and (max-width:1024px) {
    table {
        min-width: 600px;
    }
}
@media screen and (max-width:768px) {
    .logo {
        padding-left: 30px;
        width: fit-content;
    }
    .search--notification--profile {
        padding: 0 20px;
        margin-left: auto;
    }
    .main--content {
        padding: 0 20px;
    }
    .sidebar {
        padding: 20px;
    }
    .sidebar.active {
        width: 85px;
    }
    .main--content.active {
        width: calc(100% - 85px);
    }
}
@media screen and (max-width:590px) {
    .search,
    .lock,
    .chat {
        display: none;
    }
    .notification--profile {
        margin-left: auto;
    }
    .search--notification--profile {
        width: fit-content;
    }
    .sidebar {
        transform: translateX(-100%);
        z-index: 10;
        background-color: #fff;
    }
    .sidebar.active {
        transform: translateX(0);
        width: 300px;
    }
    .sidebar.active .sidebar--item {
        display: block;
    }
    .main--content {
        width: calc(100% - 0px);
    }
    .main--content.active {
        width: calc(100% - 0px);
    }
}
@media screen and (max-width:450px) {
    .doctor--filter {
        display: none;
    }
    .main--content {
        padding: 0 10px;
    }
    .logo {
        padding-left: 10px;
    }
    .search--notification--profile {
        padding: 0 10px;
    }
    .sidebar {
        padding: 10px;
    }
}

    </style>

</head>
<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Benevolence <span style="color: aqua;">Hospital</span></h2>
        </div>
        
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="index.php" >
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="admindoctorpage.php" id="active--link">
                        <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                        <span class="sidebar--item">Add/Edit Doctors</span>
                    </a>
                </li>
                <li>
                    <a href="adminpharma.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Add/Remove Pharmacist</span>
                    </a>
                </li>
                <li>
                    <a href="adminpatient.php">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Patients</span>
                    </a>
                </li>
               
            </ul>
            
        </div> <div class="doctor-management">
            <h2 style="margin-left:20px;margin-top: 20px;">Doctor Management</h2>
            
   
 
    </br>
    </br>


        <table id="doctorsTable">

            <tbody><?php
$conn = mysqli_connect("localhost", "root", "", "rajeev");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

// Check if the search form is submitted
if (isset($_POST['dname'])) {
    $searchDepartment = $_POST['dname'];

    // Query to fetch doctors by department
    $sql = "SELECT * FROM doctors WHERE name LIKE '%$searchDepartment%';";
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
             

               
            </tbody>
        </table>
    </br>
  

<button onclick="openAddDoctorForm()">Add Doctor</button>


<div id="addDoctorForm" style="display: none;">
    <h2>Add Doctor</h2>
    <form id="doctorForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="doctorName">Doctor Name:</label>
        <input type="text" id="doctorName" name="doctorname" required><br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="doctorname" required><br>

        <label for="mailId">Mail ID:</label>
        <input type="email" id="mailId" name="doctorname" required><br>

        <label for="Password">Password:</label>
        <input type="text" id="password" name="doctorname" required><br>

        <label for="ratings">Ratings:</label>
        <input type="number" id="ratings" step="0.1" min="0" max="5" name="doctorname" required><br>

        <label for="experience">Experience:</label>
        <input type="text" id="experience" name="doctorname" required><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="doctorname" required><br>

        <input type="button" value="Submit" onclick="addDoctor()">
    </form>
</div>

</div>

           
    <script src="main.js"></script>
</body>
</html>