<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
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
</head>
<body>
    <table>
        <tr>
            <th>sno</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email  </th>
            <th>phone </th>
            <th>userpassword</th>
            <th>userpasswordconfirm </th>
            <th>dateofbirth</th>
            
</tr>
<?php
$conn = mysqli_connect("localhost","root","","rajeev");
if($conn-> connect_error){
    die("Connection failed" . $conn-> connect_error);
}
$sql = "SELECT * FROM registration" ;
$result = $conn-> query($sql);
 if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["sno"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["userpassword"] . "</td><td>" . $row["userpasswordconfirm"] . "</td><td>" . $row["dateofbirth"] . "</td><td>" ;
    }
    echo"</table>";
 }
 else{
    echo "0 result";
 }
 $conn-> close();
 ?>
 </table>
</body>
</html>
