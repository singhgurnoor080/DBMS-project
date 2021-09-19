<?php
error_reporting(0);
include "connection.php";
?>

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

session_start();
echo "Welcome ".$_SESSION['user_name'];
echo "<br>";
echo "<br>";

$userprofile= $_SESSION['user_name'];

if($userprofile==true)
{

}
else{
    header('location:agent_login_page.php');
}


$query= "SELECT Aid FROM agent WHERE Username='$userprofile'";
$data = mysqli_query($conn,$query);
$tl = mysqli_num_rows($data);
$result1= mysqli_fetch_assoc($data);
$a=$result1['Aid'];


$query1= "SELECT Ppid FROM contractor WHERE Aid='$a'";
$data1 = mysqli_query($conn,$query1);
$tl1 = mysqli_num_rows($data1);
$result2= mysqli_fetch_assoc($data1);
$b=$result2['Ppid'];



$query2= "SELECT * FROM property WHERE Ppid='$b'";
$data2 = mysqli_query($conn,$query2);
$total = mysqli_num_rows($data2);

echo "PROPERTY DETAILS: <br>";

if($total!=0){
?>
<table>
    <tr>
<th>Ppid</th>
<th>Pid</th>
<th>No_room</th>
<th>No_bedroom</th>
<th>Size</th>
<th>Price</th>
<th>Type</th>
<th>Town</th>
<th>Village_street</th>
<th>Home_no</th>
<th>Avalability</th>
<th colspan="2">Operation</th>
    </tr>
        
<?php
while($result3= mysqli_fetch_assoc($data2)){

    echo "<tr>
    <td>".$result3['Ppid']."</td>
    <td>".$result3['Pid']."</td>
    <td>".$result3['No_room']."</td>
    <td>".$result3['No_bedroom']."</td>
    <td>".$result3['Size']."</td>
    <td>".$result3['Price']."</td>
    <td>".$result3['Type']."</td>
    <td>".$result3['Town']."</td>
    <td>".$result3['Village_street']."</td>
    <td>".$result3['Home_no']."</td>
    <td>".$result3['Avalability']."</td>
    <td><a href='agent_property_edit.php?pp=$result3[Ppid] & pd=$result3[Pid] & rm=$result3[No_room] & bd=$result3[No_bedroom] & sz=$result3[Size] & pc=$result3[Price] & tp=$result3[Type] & tn=$result3[Town] & vs=$result3[Village_street] & hn=$result3[Home_no] & av=$result3[Avalability]'>Edit</a></td> 
    <td><a href='property_delete.php?pp=$result3[Ppid]'>Delete</a></td>   
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }
   
  

?>
</table>




<?php






$query3= "SELECT Pid FROM contractor WHERE Aid='$a'";
$data3 = mysqli_query($conn,$query3);
$tl3 = mysqli_num_rows($data3);
$result3= mysqli_fetch_assoc($data3);
$c=$result3['Pid'];



$query4= "SELECT * FROM owner WHERE Pid='$c'";
$data4 = mysqli_query($conn,$query4);
$total4 = mysqli_num_rows($data4);
echo "<br>";
echo "<br>";
echo "OWNER DETAILS: <br>";

if($total4!=0){
?>

<table>
    <tr>
<th>Pid</th>
<th>Name</th>
<th>Town</th>
<th>Village_street</th>
<th>Home_no</th>
<th>Username</th>
<th>Password</th>
<th>Phone_no</th>
<th>Property_Ppid</th>
<th colspan="2">Operation</th>
    </tr>
        
<?php
while($result4= mysqli_fetch_assoc($data4)){

    echo "<tr>
    <td>".$result4['Pid']."</td>
    <td>".$result4['Name']."</td>
    <td>".$result4['Town']."</td>
    <td>".$result4['Village_street']."</td>
    <td>".$result4['Home_no']."</td>
    <td>".$result4['Username']."</td>
    <td>".$result4['Password']."</td>
    <td>".$result4['Phone_no']."</td>
    <td>".$result4['Property_Ppid']."</td>
    <td><a href='owner_edit_update.php?pp=$result4[Pid] & pd=$result4[Name] & rm=$result4[Town] & bd=$result4[Village_street] & sz=$result4[Home_no] & pc=$result4[Username] & tp=$result4[Password] & tn=$result4[Phone_no] & vs=$result4[Property_Ppid]'>Edit</a></td> 
    <td><a href='owner_delete.php?pp=$result4[Pid]'>Delete</a></td>   
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }



?>
</table>







<br><br>
<p>For <strong>New Property Registration</strong>click on<a href="http://localhost/site/property_insert.php" target="blank"><u>Property registration</u></a></p>

<p>For <strong>New Owner</strong> Registration click on <a href="http://localhost/site/owner_reg_page.php" target="blank"><u>Owner Register</u></a></p>


<h2><a href="agent_logout.php">Logout</a></h2>

</main>


    </body>
    </html>