<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
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
          body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color:aqua;
        }
        p {
            margin-top: 10px;
        }
        ol {
            margin-top: 10px;
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
                    <a href="index.php" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="admindoctorpage.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
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
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Overview</h2>
                   
                </div>
                <?php
                $SERVERNAME="localhost";
                $USERNAME="root";
                $PASSWORD="";
                $DATABASE="rajeev";
 
                
                
                $conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);
                    $nodoctors = "select * from doctors;";
                    $run = mysqli_query($conn,$nodoctors);
                    $count = mysqli_num_rows($run);

                    $nopharmacists = "select * from pharmacistlogin;";
                    $run1 = mysqli_query($conn,$nopharmacists);
                    $count1 = mysqli_num_rows($run1);

                    $noadmins = "select * from adminlogin;";
                    $run2 = mysqli_query($conn,$noadmins);
                    $count2 = mysqli_num_rows($run2);

                    $noreg = "select * from registration;";
                    $run3 = mysqli_query($conn,$noreg);
                    $count3 = mysqli_num_rows($run3);

                    

                ?>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Doctors</h5>
                                <h1><?php echo($count);  ?></h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                        </div>
                    </div>
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Pharmacist</h5>
                                <h1><?php echo($count1);  ?></h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                        </div>
                    </div>
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Admins</h5>
                                <h1><?php echo($count2);  ?></h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                        </div>
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Patients</h5>
                                <h1><?php echo($count3);  ?></h1>
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>230</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>45</span>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
        </br>
            <h1>Welcome to the Admin Page</h1>
        </br>
            <blockquote>
                <p>"Healthcare is not just a profession; it's a commitment to serve humanity with compassion and care."</p>
            </blockquote>
        </br>
            <p>This admin page provides you with the tools and features to manage and oversee the various aspects of the hospital management system. From user management to data analysis, you have the power to ensure the smooth operation of the healthcare facilities. Use these resources responsibly, always keeping in mind the ultimate goal of providing quality care to patients. Your dedication contributes to the well-being of the community and strengthens the foundation of a healthier society.</p>
        </body>
    </br>
    <h1>Admin Instructions</h1>
    <p>Welcome to the Hospital Management System Admin Panel! As an administrator, you play a crucial role in ensuring the smooth operation of the system. Please follow these instructions to effectively manage the system:</p>
    <ol>
        <li><strong>User Management:</strong> Use the user management section to add, modify, or remove user accounts. Ensure that each user has the appropriate access levels and permissions.</li>
        <li><strong>Data Management:</strong> Regularly update and maintain patient records, staff details, and other essential data. Keep the information accurate and up-to-date for efficient hospital operations.</li>
        <li><strong>Reports and Analytics:</strong> Utilize the reporting tools to generate insights into hospital performance, patient statistics, and resource utilization. This information can aid in strategic decision-making.</li>
        <li><strong>System Settings:</strong> Review and configure system settings to align with the hospital's policies and procedures. Customize the system to meet specific requirements and ensure optimal functionality.</li>
        <li><strong>Security:</strong> Prioritize the security of sensitive information. Regularly update passwords, monitor user activity, and implement security best practices to safeguard patient confidentiality.</li>
    </ol>
    <p>Thank you for your dedication to the healthcare system. Your efforts contribute to the delivery of quality care and the overall success of the hospital.</p>

    <script src="main.js"></script>
</body>
</html>