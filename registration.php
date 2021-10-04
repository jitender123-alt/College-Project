<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
error_reporting (0);
if(isset($_POST['submit']))
{
    $q = $_POST['name'];
    $g = $_POST['Gender'];
    $d = $_POST['dob'];
    $a = $_POST['age'];
    $f= $_POST['fname'];
    $m = $_POST['mname'];
    $e = $_POST['email'];
    $s = $_POST['state'];
    $p = $_POST['pincode'];
    $ad = $_POST['address'];
    $c = $_POST['contact'];
    $bg = $_POST['bg'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blooddonor";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());

    }
$sql  = "INSERT INTO `registration` (`name`, `gender`, `dob`, `age`, `fname`, `mname`, `email`, `state`, `pincode`, `address`, `contact`, `blood group`) VALUES ('$q', '$g', '$d', '$a', '$f', '$m', '$e', '$s', '$p', '$ad', '$c', '$bg')";
if(mysqli_query($conn,$sql)){
    echo "<BR> Row Created sucessfuly";
}else {
    echo "<br> ERROR".mysqli_error($conn);
}

}

?>
    <h1 align = "center">ONLINE BLOOD BANK</h1><BR>
    <h1 align = "center"><strong>DONOR REGISTRATION</strong></h1>
    
    <form action="" method="POST">
    <center>
    
    <table width = "60%">
        <tr><td width = "35%">
            <label for="name">NAME OF THE DONOR</label>
        </td>

            <td width ="65%">
            <input type="text" id = "name" placeholder="enter name...." required>
            
        </td></tr>
        <tr>
            <td width = "35%">
                <label for="gender">Gender</label>
            </td>
            <td width =65%>
                <select name="Gender" id="Gender">
                    <option value="Select">Select here</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            
        </tr>
        <tr>
            <td width = "35%">
                <label for="date">DATE OF BIRTH</label></td>
            <td width = "65%">
                <input type="date" id="date of birth" name="dob">
            </td>
            
        </tr>
        <tr><td width = "35%">
            <label for="AGE">AGE</label>
        </td>
        <td width ="65%">
            <input type="number" id="age" name="age" placeholder="Enter your age.....">
        </td>
    </tr>
    <td width = "35%">
        <label for="fname">FATHER NAME</label>
    </td>
    <td width = "65%">
        <input type="text" name="fname" id="fname" placeholder="enter your father name......">
    </td>
</tr>
<tr>
    <td width = "35%">
        <label for="mname">MOTHER NAME</label>
    </td>
    <td width = "65%">
        <input type="text" id="mname" name="mname" placeholder="enter your moter name......">
    </td>
</tr>
<tr>
    <td width = "35%">
        <label for="email">EMAIL</label>
    </td>
    <td width = "35%">
        <input type="text" id="email" name="email" placeholder="@email">
    </td>
</tr>
<tr><td width = "35%">
    <label for="state">STATE</label>
</td>
<td width = "35%">
    <select name="state" id="state">
        <option value="select here">Select Here</option>
        <option value="andra paredsh">Andra Pardesh</option>
        <option value="arunachal paredesh">Arunachal Pardesh</option>
        <option value="assam">Assam</option>
        <option value="bihar">Bihar</option>
        <option value="chhatisgarh">Chhatisgarh</option>
        <option value="chandigarh">Chandigarh</option>
        <option value="delhi">Delhi</option>
        <option value="goa">Goa</option>
        <option value="gujarat">Gujarat</option>
        <option value="haryana">Haryana</option>
        <option value="himachal paredesh">Himachal Pardesh</option>
        <option value="jammu & kashmir">Jammu & Kashmir</option>
        <option value="jharkhand">Jharkhand</option>
        <option value="karnatka">Karnatka</option>
        <option value="kerla">Kerla</option>
        <option value="madhya paredesh">Madhya Pardesh</option>
        <option value="maharastra">Maharastra</option>
        <option value="manipur">Manipur</option>
        <option value="meghalya">Meghalya</option>
        <option value="mizoram">Mizoram</option>
        <option value="nagaland">Nagaland</option>
        <option value="orissa">Orissa</option>
        <option value="punjab">Punjab</option>
        <option value="rajasthan">Rajasthan</option>
        <option value="sikiim">Sikkim</option>
        <option value="tamilnadu">Tamil Nadu</option>
        <option value="tripura">Tripura</option>
        <option value="Uttar pardesh">Uttarpardesh</option>
        <option value="west bengal">West bengal</option>
        <option value="telgana">Telegana</option>
        <option value="laddkah">Laddkah</option>
    </select>
</td>
</tr>
<tr>
    <td width = "35%">
        <label for="pincode">PINCODE</label>
    </td>
    <td width = "35%">
        <input type="text" id="pincode" name="pincode" placeholder="PINCODE">
    </td>
</tr>
<tr>
    <td width = "35%">
        <label for="address">ADDRESS</label>
    </td>
    <td width = "35%">
        <input type="text" id="address" name="address" placeholder="ADDRESS">
    </td>
</tr>
<tr>
    <td width = "35%">
        <label for="contact">CONTACT</label>
    </td>
    <td width = "35%">
        <input type="text" id="contact" name="contact" placeholder="CONTACT">
    </td>
</tr>
<tr>
    <td width = "35%">
        <label for="blood groupu">BLOOD GROUP</label>
    </td>
    <td width = "35%">
        <select name="bg" id="Blood Group & RH type">
        <option value="A Postive">A Postive</option>
        <option value="A Negative">A Negative</option>
        <option value="B Postive">B Postive</option>
        <option value="B Negative">B Negative</option>
        <option value="O Postive">O Postive</option>
        <option value="O Negative">O Negative</option>
        <option value="AB Postive">AB Postive</option>
        <option value="AB Negative">AB Negtive</option>
        <option value="A1 Postive">A1 Postive</option>
        <option value="A1 Negative">A1 Negative</option>
        <option value="A2 Postive">A2 Postive</option>
        <option value="A2 Negative">A2 Negative</option>
        <option value="A1B Postive">A1B Postive</option>
        <option value="A1B Negative">A1B Negative</option>
        <option value="A2B Postive">A2B Postive</option>
    </select>
        



    </td>
</tr>

    </table>
    <input type="Submit" value="Register" name="submit">
    </form>
    <br>
    <a href="home.php">Home/<a>
</body>
</html>