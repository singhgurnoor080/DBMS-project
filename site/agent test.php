<!DOCTYPE html>
<html>
<head>
<title> Agent Home page</title>

</head>

<body>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <style>
body{
    background-image: url("image/property_bc7.jpg");
    background-size: cover;
}

h1{
    text-align: center;
    color: blue;
    padding :10px;
    
    font-family: 'Lobster', cursive;
}
h2{
    color: brown;
    text-align: center;
}

</style>
<h1>BAGA STREET PROPERTIES</h1>

<main>
<h2>Agent Home Page</h2>
<?php
error_reporting(0);
include "connection.php";
session_start();
echo "Welcome ".$_SESSION['user_name'];

$userprofile= $_SESSION['user_name'];

$query= "SELECT Aid FROM agent WHERE Username='$userprofile'";
$data = mysqli_query($conn,$query);
$tl = mysqli_num_rows($data);
$result1= mysqli_fetch_assoc($data);
$a=$result1['Aid'];
echo $result1['Aid'];



?>

<p>For <strong> PROPERTY UPDATE </strong>click on<a href="http://localhost/site/property_update.php" target="blank"><u>Propert edit and udate</u></a></p>
<p>For <strong>New Property Registration</strong>click on<a href="http://localhost/site/property_insert.php" target="blank"><u>Property registration</u></a></p>

<p>For <strong>New Owner</strong> Registration click on <a href="http://localhost/site/owner_reg_page.php" target="blank"><u>Owner Register</u></a></p>
<p>To <strong>Update the Owner details</strong> click on <a href="http://localhost/site/owner_update.php" target="blank"><u>Owner Update</u></a></p>

<h2><a href="agent_logout.php">Logout</a></h2>

</main>


    </body>
    </html>