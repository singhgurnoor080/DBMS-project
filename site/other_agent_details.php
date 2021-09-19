<?php
include "connection.php";
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agent_details</title>
</head>
<body>
    <style>
body{
    background-image: url("image/property_bc6.jpg");
    background-size: cover;
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
.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 5px solid white;
    border-radius: 14px;
    cursor: pointer;
}

input{
    width: 50%;
    margin: 11px auto;
    padding: 10px;
    font-size: 15px;
    border: 2px solid black;
    border-radius: 10px;
}
.cont{
    max-width: 80%;
    padding: 40px;
    margin: auto;
    
}

    </style>
<h1>Property and Agent Details</h1><br>
<main>

<div class="cont">
<form action="" method="post">
<p><b>Enter the Aid to get the details of Property related to agent:<b><br><input type="text" name="Aid" id="Aid" placeholder="Enter Aid" required></p>
<input type="submit" class="btn" name="submit" value="Submit">
<br><br>

</main>

</body>
</html>

<?php


$pp= $_POST['Aid'];



$query= "SELECT Ppid FROM contractor WHERE Aid='$pp'";
$data = mysqli_query($conn,$query);
$tl = mysqli_num_rows($data);
$result1= mysqli_fetch_assoc($data);
$a=$result1['Ppid'];


$que = "SELECT * FROM property WHERE Ppid='$a'";
$dt = mysqli_query($conn,$que);
$total = mysqli_num_rows($dt);


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
    </tr>
        
<?php
while($result2= mysqli_fetch_assoc($dt)){

    echo "<tr>
    <td>".$result2['Ppid']."</td>
    <td>".$result2['Pid']."</td>
    <td>".$result2['No_room']."</td>
    <td>".$result2['No_bedroom']."</td>
    <td>".$result2['Size']."</td>
    <td>".$result2['Price']."</td>
    <td>".$result2['Type']."</td>
    <td>".$result2['Town']."</td>
    <td>".$result2['Village_street']."</td>
    <td>".$result2['Home_no']."</td>
    <td>".$result2['Avalability']."</td>      
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }
   

?>
</table>


<?php

$query= "SELECT * FROM agent";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
<table>
    <tr>
<th>Aid</th>
<th>Name</th>


    </tr>
        
<?php
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Aid']."</td>
    <td>".$result['Name']."</td>
    
          
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
