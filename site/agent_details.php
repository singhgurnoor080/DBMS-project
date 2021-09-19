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

    </style>
<h1>Agent Details</h1><br>

</body>
</html>



<?php
include "connection.php";
error_reporting(0);

$query= "SELECT * FROM agent";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
<table>
    <tr>
<th>Aid</th>
<th>Name</th>
<th>Phone_no</th>
<th>email_id</th>

    </tr>
        
<?php
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Aid']."</td>
    <td>".$result['Name']."</td>
    <td>".$result['Phone_no']."</td>
    <td>".$result['email_id']."</td>
          
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
