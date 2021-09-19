<?php
include "connection.php";

error_reporting(0);
session_start();
echo "Welcome ".$_SESSION['user_name'];

$userprofile= $_SESSION['user_name'];
if($userprofile==true)
{

}
else{
    header('location:manager_login.php');
}

?>


<!DOCTYPE html>
<html>
<head>
<title>manager</title>

</head>

<body>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <style>
body{
    background-image: url("image/property34.jpg");
    background-size: cover;
}

h1{
    text-align: center;
    color: blue;
    padding :10px;
    
    font-family: 'Lobster', cursive;
}
h3{
    color: brown;
    text-align: center;
}

</style>
<h1>BAGA STREET PROPERTIES</h1>

<main>
<h3>WELCOME TO MANAGER PAGE.</h3>

<p>For <strong> Client </strong>Information click on <a href="http://localhost/site/client_details.php" target="blank"><u>client-details</u></a></p>
<p>For <strong> Agent </strong> Details click on <a href="http://localhost/site/agent_details.php" target="blank"><u>agent-details</u></a></p>
<p>For <strong>Owner</strong>Details click on <a href="http://localhost/site/owner_details.php" target="blank"><u>Owner-details</u></a></p>
<p>To view <strong>Property</strong> details click on <a href="http://localhost/site/buy.php" target="blank"><u>Property deatails</u></a></p>
<p>To view <strong>Rent_Sale</strong> details click on <a href="http://localhost/site/aid_cid_prop.php" target="blank"><u>Rent-sale deatails</u></a></p>

<a href="manager_logout.php">Logout</a>

</main>


    </body>
    </html>

    