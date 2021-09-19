<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner_update</title>
</head>
<body>
    <style>
body{
    background-image: url("image/property_bc7.jpg");
    background-size: cover;
}
 td{
     padding: 10px;
     color: black;
 }

 th{
     padding: 10px;
 }

    </style>
</body>
</html>



<?php
include "connection.php";
error_reporting(0);

$query= "SELECT * FROM owner";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
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
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Pid']."</td>
    <td>".$result['Name']."</td>
    <td>".$result['Town']."</td>
    <td>".$result['Village_street']."</td>
    <td>".$result['Home_no']."</td>
    <td>".$result['Username']."</td>
    <td>".$result['Password']."</td>
    <td>".$result['Phone_no']."</td>
    <td>".$result['Property_Ppid']."</td>
    <td><a href='owner_edit_update.php?pp=$result[Pid] & pd=$result[Name] & rm=$result[Town] & bd=$result[Village_street] & sz=$result[Home_no] & pc=$result[Username] & tp=$result[Password] & tn=$result[Phone_no] & vs=$result[Property_Ppid]'>Edit</a></td> 
    <td><a href='owner_delete.php?pp=$result[Pid]'>Delete</a></td>   
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
