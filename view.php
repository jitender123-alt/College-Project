<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD DONATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align = "center">ONLINE BLOOD BANK </h1><br>
    <h1 align = "center"><strong>VIEWING DONOR LIST</strong></h1>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddonor";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
//$sql = "INSERT INTO `registration` (`name`, `gender`, `dob`, `age`, `fname`, `mname`, `email`, `state`, `pincode`, `address`, `contact`, `blood group`) VALUES ('$q', '$g', '$d', '$a', '$f', '$m', '$e', '$s', '$p', '$ad', '$c', '$bg')";
$sql = "SELECT* FROM registration";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "<table border = '2'>";
    echo "<tr><th> Name of the donor</th><th>Gender</th><th>Date of the birth</th>";
    echo "<th> Age </th><th>Father's Name</th><th>Mother's Name</th>";
    echo "<th> Email id</th><th>Address</th><th>State</th><th> Pin code</th>";
    echo "<th> Contact</th><th>Blood group</th></tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['dob']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['fname']."</td>";
        echo "<td>".$row['mname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['state']."</td>";
        echo "<td>".$row['pincode']."</td>";
        echo "<td>".$row['contact']."</td>";
        echo "<td>".$row['blood group']."</td>";
        echo "</tr>";
    }
echo "</table>";
    
} else{
    echo " 0 result";
}
mysqli_close($conn);
?>
<BR>
<BR>
<center>
<a href="home.php">HOME</a>

    
</body>
</html>
