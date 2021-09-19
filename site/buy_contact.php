<?php
include "connection.php";

error_reporting(0);
session_start();
echo "<br><br>";
echo "<b>Welcome ".$_SESSION['user_name'];

$userprofile= $_SESSION['user_name'];
if($userprofile==true)
{

}
else{
    header('location:client_login_page.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy_contact</title>
</head>
<body>
    
    <style>
body{
    background-image: url("image/property_bc5.jpg");
    background-size: cover;
}
.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 5px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.cont{
    max-width: 80%;
    padding: 40px;
    margin: auto;
    
}
input{
    width: 50%;
    margin: 11px auto;
    padding: 10px;
    font-size: 15px;
    border: 2px solid black;
    border-radius: 10px;
}

 td{
     padding: 10px;
 }

 h1{
    text-align: center;
    color: blue;
    padding :10px;
    
    font-family: 'Lobster', cursive;
}

    </style>

<main>
<div class="cont">
<form action="" method="post">
<p><b>Enter the Ppid to get the details of Agent:<b><br><input type="text" name="Ppid" id="Ppid" placeholder="Enter Ppid" required></p>
<input type="submit" class="btn" name="submit" value="Submit">
<br><br>
<a href="client_logout.php">Logout<a/>
</div>
</main>




<?php


$pp= $_POST['Ppid'];



$query= "SELECT Aid FROM contractor WHERE Ppid='$pp'";
$data = mysqli_query($conn,$query);
$tl = mysqli_num_rows($data);
$result1= mysqli_fetch_assoc($data);
$a=$result1['Aid'];


$que = "SELECT Name,Phone_no,email_id FROM agent WHERE Aid='$a'";
$dt = mysqli_query($conn,$que);
$total = mysqli_num_rows($dt);


if($total!=0){

while($result2= mysqli_fetch_assoc($dt)){
     
    echo "CONTACT DETAILS: <br>";
    echo $result2['Name'];
    echo "<br>";
    echo $result2['Phone_no'];
    echo "<br>";
    echo $result2['email_id'];


}
   }
   else{
       echo " NO RECORDS";
   }


   include "buy.php";

?>


</body>
</html>