<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client_details</title>
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

    </style>
<h1>Client Details</h1><br>

</body>
</html>



<?php
include "connection.php";
error_reporting(0);

$query= "SELECT * FROM client";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
<table>
    <tr>
<th>Cid</th>
<th>Name</th>
<th>Town</th>
<th>Village_street</th>
<th>Home_no</th>
<th>Username</th>
<th>Password</th>
<th>Phone_no</th>

    </tr>
        
<?php
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Cid']."</td>
    <td>".$result['Name']."</td>
    <td>".$result['Town']."</td>
    <td>".$result['Village_street']."</td>
    <td>".$result['Home_no']."</td>
    <td>".$result['Username']."</td>
    <td>".$result['Password']."</td>
    <td>".$result['Phone_no']."</td>
          
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
