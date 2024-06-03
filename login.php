<?php
 $unameerr = $passworderr = "";
 $uname = $password = "";
 $err="";

 if($_SERVER["REQUEST_METHOD"] == "POST"){
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="rajeev";
  $uname=enterdata($_POST['uname']);
  $password=enterdata($_POST['password']);


$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);
if(isset($_POST["usertype"])){
    $usertype=$_POST["usertype"];
    if($usertype == "user"){
$sql = "Select * from registration where firstname='$uname' and userpassword='$password'; ";
$results=mysqli_query($conn, $sql);
$nums = mysqli_num_rows($results);
if($nums == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['firstname']= $uname;
    header("location: about.php");
}
 }
else if($usertype == "pharmacist"){
    $sql = "Select * from pharmacistlogin where firstname='$uname' and userpassword='$password'; ";
    $results=mysqli_query($conn, $sql);
    $nums = mysqli_num_rows($results);
    if($nums == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: pharmahomepage.php");
    }

}
else if($usertype == "doctor"){
    $sqlC = "Select * from doctorlogin where firstname='$uname' and userpassword='$password' and department='cardiology'; ";
    $resultsC=mysqli_query($conn, $sqlC);
    $numsC = mysqli_num_rows($resultsC);

    $sqlD = "Select * from doctorlogin where firstname='$uname' and userpassword='$password' and department='dermatology and cosmetology'; ";
    $resultsD=mysqli_query($conn, $sqlD);
    $numsD = mysqli_num_rows($resultsD);    
    
    $sqlG = "Select * from doctorlogin where firstname='$uname' and userpassword='$password' and department='general surgeon'; ";
    $resultsG=mysqli_query($conn, $sqlG);
    $numsG = mysqli_num_rows($resultsG); 
    
    $sqlH = "Select * from doctorlogin where firstname='$uname' and userpassword='$password' and department='health checkup packages'; ";
    $resultsH=mysqli_query($conn, $sqlH);
    $numsH = mysqli_num_rows($resultsH); 
    
    $sqlN = "Select * from doctorlogin where firstname='$uname' and userpassword='$password' and department='neurologist'; ";
    $resultsN=mysqli_query($conn, $sqlN);
    $numsN = mysqli_num_rows($resultsN); 

    if($numsC == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: doctordashboardC.php");
    }
    else if($numsD == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: doctordashboardD.php");
    }
    else if($numsG == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: doctordashboardG.php");
    }
    else if($numsH == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: doctordashboardH.php");
    }
    else if($numsN == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: doctordashboardN.php");
    }
   }
else if($usertype == "administrator"){
    $sql = "Select * from adminlogin where name='$uname' and password='$password'; ";
    $results=mysqli_query($conn, $sql);
    $nums = mysqli_num_rows($results);
    if($nums == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname']= $uname;
        header("location: index.php");
     }
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .error {color: #FF0000;}
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            background-image: url('https://i.pinimg.com/originals/ea/7f/2d/ea7f2dd47969349da148ea0b4ec56815.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 100%;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: rgba(235, 235, 240,0.8);
            border-radius: 11px;
            padding: 20px;
            width: 350px;
            text-align: center;
            
        }

        .box h1 {
            color: rgb(238, 237, 237);
        }

        .box .user-type {
            margin-top: 20px;
        }

        .box .input-box {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 20px;
            margin-top: 8px;
            background-color: #fff;
        }

        .box .btn {
            width: 100%;
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 16px;
            border: none;
            color: #fff;
            background-color: #ff1e05;
            transition: background-color 0.3s ease;
        }

        .box .btn:hover {
            background-color: #17CED4;
          
        }

        .box .forget {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .hospital-box {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: rgba(16, 15, 27, 0.8);
            border-radius: 5px;
            padding: 10px;
            color: #17CED4;
        }

        .box .forget a {
            text-decoration: none;
            color: #17CED4;
           
        }

        .box .checkbox-label {
            display: flex;
            align-items: center;
            padding-top: 5%;
        }

        .box .checkbox-custom {
            width: 20px;
            height: 20px;
            background-color: #fff;
            border-radius: 50%;
            margin-right: 5px;
        }

        .box .label-text {
            color: #17CED4;
          
        }

        .box .option {
            margin-top: 5%;
            color: #17CED4;

        }

        .box .social {
            display: flex;
            justify-content: center;
            margin-top: 16px;
        }

        .box .box-radius {
            margin: 0 10px;
            border-radius: 50%;
            background-color: #fff;
            padding: 10px;
        }

        .box .box-radius img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1 style="color:black;">Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <label for="username">Username</label><br>
            <input type="text" name="uname" id="uname" placeholder="Enter Username" class="input-box" required><br><br>
            <span class="error">* <?php echo $unameerr;?></span>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="input-box" required><br>
            <span class="error">* <?php echo $passworderr;?></span>   <span class="error"><?php echo $err;?></span> 
            <div class="forget">
                <label class="checkbox-label">
                    <input type="checkbox" required>
                    <span class="label-text">Remember me</span>
                </label>
               
            </div>
            <div class="user-type">
            <label for="usertype">I am a:</label>
            <select name="usertype" id="user-type" class="input-box">
                <option value="doctor">Doctor</option>
                <option value="administrator">Administrator</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="user">User</option>
            </select>
        </div>
            <button type="submit" value="submit" class="btn">Log In</button>
        </form>
        <span class="option">Or log in with</span>
        <div class="social">
            <div class="box-radius">
                <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="">
            </div>
            <div class="box-radius">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAADjCAMAAADdXVr2AAABTVBMVEX////qQzU0qFNChfT7vAUtfPPx9f4+g/RhlvVpm/b7uAD7ugDqPzD/vQD7twDqPS4lpEnpNiXpMB3pOir97ezpMyHpLho3gPQbokQtpk4SoT8ipEf62tjoKRL8wgDqRjjubGPpNzb8zmP+6sLj8eYyqUjY7N1etnTrUUX++Pfwhn/tY1nzpaDveXH74+L5z8zylpD2urf94qn+9eLc5/2Hrfe3zfrX4/zx+fPN5tK+38ZJr2N9wo3sW1D1sq73xMH8yU/0jy/tXznxfjT81YD2nir+8dX+57r5sxz925P7wiv80nP914j7wiZmuXqj065FoplIj+N3wIlJmcRAqHHuc2vxjojvd2Pvbjf4qiPzoJrrUTnA0/uiv/l8pveStPiMtE9RrFHNuS2dsz5nrUveuR+1tTGy2rt7vHQrpGCXzqRJlNVInrBCpoJHiu5E6UIdAAALc0lEQVR4nO2cWXviyBWGBcYrsrVZIAFqyAwGjMGG3owRhp5k4lnbJCTuTDxud3YyJJn/fxkJsUhCQlVSqUrSM99NP30B0ss5db5aTpmiwtdpaTRsdZrtym2jXE6lyuXG7UWl3ewMu1elUwzPD0vnpW7noczleJETGIahUyvRNMMIAifyOaHRfuyWzkm/KqxKw2ZZ4TUsE5SjaEbgeKXRHJZIvzKorh4vRJ7zBLNCcrxYaUUe8XT4IPICDNlajMBz7W50h+Nlq6FwjC+0FSKn3LaiSHjaauR8hs0qmsvdDiNWbLoVhUPBtiRU2lekkVa67HBisJzcFMOnWpEI4VVFERCzGeJyzUvScN0GjzpwawnKA1GvGJZFdCPOSUyuQgywmwoZbg6oVIik6Kghhs62AGxjd8LSbS78yK0Ac49Y4c7bCj44XZwwwkc3FMOxgm3KVTBl6CWuQWcVowxx0HUw5+Va4m3oASw1OEJwKb3EhBzAFrHQGeIrIU5ETy+IjDqzGCG0pcQI+brAj5RWOHQdhTSZIfEhBLjzC4I1xSqhjLyCXgpRSMyF6BziATgiXDHtQmvxrYgMu7WUDjq6DznSNJvim6jo2sTdzkl8Gw1dJTIl0ywmhaZ83uJf/ACI/oUOhC5CdrdWwuloNHQXic7MSqLp2pF0BFSZ2Ymkm6OK3TBy80xdqGJ3lWi602hmJiI6qhGt9Z0hZHQPUbQEZHQtHvGbzXusRD6niedFkRN8NFHQDCK6EsKyQgscnytXPjx2R1elS12lq9HwsXmRyvFQTTDI6KgUqoHHiLnyh6FLS9x5adhM5UAR0dG10Qw8IUc3R17vdNptcyDNB+jouih2Vhg+1QE99L9qcl6H9OjoThGUFU5pwu1Eji62NsfQArKN24ugSzxapH00FF02eVdAhHTDgMGjxXLX35NPOzlnQHSZSZ0HHHicX7j5wz8oDqmDkC5g1RS4gKdTl5WNnxdhZlJXQYJHK83gZ6cjwfoDo6SjygEMnWugaf9qmn9ipHStANsP6A41RuuZDFK6AHVFoBF27q2OSpHSUU3fdYV/QNuxYJxJoaW79L1QQH+c31VQ01EVn/MVmg+hGaMkMmjp/K7yGDqUftJLxF/7J3/BYxqR6Fj30t3RD7/yQSfcxoKOepd98QU8n3BL+r3BdHeSybz4cxmSjokJHfVZNqPxHf0aKoBMg/RrA+qVFjxdL34DwUen4jHuKOrLbGbB91twPjGKV9EctaTT+L7+ERBQic4tLQ+9PMqYBOYQPJbWbSR6nzXjATmEgKgrCIPuTjIWATgEXSb90uD6Lpux8Xk6hEL8bh24jjIb8nAIMaSO5jD0lQPedodgLki/M4Te2XPT0yHilJrnTsHb6hAc3gtnweSYm9scIk5VczGbduFzdIgcxst0wXXiSufsEHSc6gr1uWtuGoAbDqFE/i9zmLXh6XY+m0MwFdJvDKWMB57dIXKxCt6rbUNvKZNDxCx4L7cPvUUA1w6B+v5OyNpiC2a+pUPQcdleWQiIbu0QXIDDZQJ6BZKbBuDcIcS47B4Zcp+RbfJpDsEgu5mER18CJuec7+sfwzgMClPfQuBp+oH0+0IKPDd1Zb8L+Lg9fNIfB2Tqax19HhDvYBeX9vXHQVSWOV5AOupwfweTdvXHfQOFl/0sRnivKdA5yyp4L+ODl3+iYAvnyasY4X2kgKdkSwWlw4i3/2bbJpmTgg89nHgHer8ADN7RNzHC29nx3Gex4wV1Pax4u4Br2ZWCVxaseHvUSzhfCEyHFe819T0MXvbbWOHlrz03Aa14wQsnVrwnuElL9vt44b11OfpyUfApGV68j3BzsqOv4oX3iXoPQYfC9nDiabMyGLrM0d0veBHCe0423iEkXvA5WaTxEh69eOHtHCQdL9G+d5joWYuGl+Q5p4aX5BWDZutJXu9peElerWtzziTvtWgLoiTvlGnL2STvc2p4Sd6lzr9N8hnD/AQsuSdEO7vXST7fmx/PJvd0Vj9jSPDZ+k6eSnJnxM7PFP6+Foyns4f68zB3JWFsHfikPw9qxXd8/JegePl9/4LDe6s/D6Yj8Pj9X6VaMLznA/86hMPT+1pgasvx39JpeRAwfEEEFb5do2cOGO/472lNRXJ0r3eh8IwPASbnceYf6Tlenxje2zwEnd7Wogts3nL8z7QhWSWG9wyTnPk3xoeAVrTH/0ovVQhYXPwLJniLwglk7JofrOjS8j0humu4oXe9+JjnHSLND9ImFapk8D5BRc8onJT3DTDdD8ySJ2TwYOCMGedcHvsthh+QDx9cbhpTsrm2Db6lH1jCR2T0vYGrLE+rD26xhpUfWMN3g59uDyp466G3bV5m8gNL+Ah430eo4OnNnEu5bZdZ/MCi4hg7Hhzc0tTncl4U2fzAmp49zHRQEzLL0HPJTrsfkK0ucMEzDz3Kccm+6QcWSVOsdB/hCstyPr3QhrM7+YGND2t6wtEZdxjWsv+1HWc/sKYnzuoJ53mLCzYmWf9WkosfWMXiW7fDTVh2TDOyhcyrInc/sKqAbWELCWfPTcq8Zt/mBzY+THNP2NTcyE3ThtlWP7BJxlJenmBTc9+em+tFrYcf2PBwlJe9POzO73KhbtZ8Xu3tBza+evh4O9D72lZPN6R7A4Af2MSGPns5hB14i8MFu95lgfwAM98zNN16l8WiuxMwP8DKB100dTl/1b9lP3hpNsTx9wm2aO44mZ6hWsEXnlY/w/KHNz7oHAvLXPf+wpeW5XB2dn2MO9tC1qKqz/Bp85cQlkd7B37oHGYsKw18hk/jQz6/voY8rVzI2RUM9SS/eGlWRTsBhVy/ggSPosZF33yyhHB7ae/AJ9224GnyTadJqqMK4PSn3/sadx7Bo6gb39VFD2BhhgKuWpfksz/4Cp9H8Chq4ru66GLTwZe4g4L+Cme/g14oeAcvUHWZS1KDbdCPi6zxRWd//Bk6Qd09b6VpQD5ZqvsG7K3g9C+S/wOboK4TFpPqgdJzDqj6StHqQGItX3T2312oBHWbbVp/Qv/msAIsFmeQVbTXrxc2ftez/8GtZYGe1A9SPZdiC+oYnLA/kYpOSXOmQjjE7pP3g3RNWIcnQUvWCGcAc+3auF5wZJt/CbhD5J9Bf0wUdAahJNVnN67rpWp/VpckdutgB3YIkLqy+EFRpOcKsViQ64PZ9KZW7Rmq1m7649m9WpSK29EMPjCHAE1NXUHdYYNRgyxKklTQpf1b1LiAC7R8BuAQnvMVi9AMP1TSHMKLLg+cmnOpQd0PqTwdAiY1dSFwP5TycAiA2ZhNKMsLAm11CIdDBU8hcXeEcneIfXBPMGmMuHwGlatDOG9Le2oQrfHntobYBZlJOyla9pB2dgjwydiG6pHj23AIW49H3PlsDrEPtgqKDZ/NISBnK9HnszhE3mvvKI58S4fY99wZA9B9xPxh5RD7Pg3PpknE/D292GVCQ0dRs4jNz9Jzh0CRmYamEeT7CRkdRd1IkVr/acMvjfTEu5qOFB+LvB8qSgVUCuEiTHQKDJqDNrtuALbtMEiWQmok7dUj4IBsaG002gp+85wDs9D3YJhVVYlWGDn0q7szggGU7sPv/62qhEagXMRzN2RaJLFIKkxw3QzpDbBnaDGN89Kg3nyCEY7FfqXuBt8QlAsD3BfqNPXTWADlwoTQVXINMOwUJQc3B1RDBWQLA4Jwumr3hZBsQi6yMwJjzq7ejHXt3AgAV/DX3BSG+loIURLKEgvb1xSuemPVo0MFgq04IXDx30vVsereXwSKxkrFQWSS0q7edFL0HURZLoL1aRFVbVyHR9T7s9RZPwKFEkS16UQtAPVU6Q1LUkGdjN1bzyKq2lRvHNMpWVm2NFnp/2VZvQ1LViezftTzcZt6tf50PBtM6qpqsKmqWp8MZuNpv1YNN2L/B9Bw+CXBDwjtAAAAAElFTkSuQmCC" alt="">
            </div>
            <div class="box-radius">
                <img src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="box-radius">
                <img src="https://about.twitter.com/content/dam/about-twitter/x/brand-toolkit/logo-black.png.twimg.1920.png" alt="">
            </div>
        </div>
        <div class="hospital-box">
          Benavolence Hospital
      </div>

    </div>
    <?php
    
    ?>

</body>
</html>
