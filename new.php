<?php
if(isset($_POST['submit']))
{
    $n = $_POST['name'];
    $g = $_POST['Gender'];
    $n = $_POST['dob'];
    $g = $_POST['age'];
    $n = $_POST['fname'];
    $g = $_POST['mname'];
    $n = $_POST['email'];
    $g = $_POST['state'];
    $n = $_POST['pincode'];
    $g = $_POST['address'];
    $n = $_POST['phone'];
    $g = $_POST['bg'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blooddonor";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());

    }
$sql  = "INSERT INTO registration` (`name`, `gender`, `dob`, `age`, `fname`, `mname`, `email`, `state`, `pincode`, `address`, `contact`, `blood group`) VALUES ('$n', '$g', '$d', '$a', '$f', '$m', '$e', '$s', '$p', '$ad', '$c', '$bg')";
if(mysqli_query($conn,$sql)){
    echo "<BR> Row Created sucessfuly";
}else {
    echo "<br> ERROR".mysqli_error($conn);
}

}

?>