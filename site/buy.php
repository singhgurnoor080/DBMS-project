<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <style>
body{
    background-image: url("image/property_bc6.jpg");
    background-size: cover;
}
 td{
     padding: 10px;
 }

 button{
    
    border-radius: 20px;
    cursor: pointer;
    border-color: black;
    padding: 5px;
    font-size: 10px;
    transform: scale(1.1);
    position: relative;
    background-image: url("image/sky1.jpg");
}

button:hover{
    animation-name: rainbow;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    background-color: #09A7A1;
    transform: scale(1.5) rotate(10deg);
    box-shadow: 25px 10px 10px 10px gray;
}

@keyframes rainbow{
      0%{
          top: 0%;
          left: 0px;
      }
      50%{
          top: 0%;
          left: 10px;
      }
      100%{
          top: 0%;
          left: -10px;
      }
  }

 .pp{
    font-size: 30px;
    color: darkblue;
}

.cont{
    max-width: 50%;
    padding: 20px;
    margin: auto;
    border-color: brown;
    border-radius: 20px;
}


 h1{
    text-align: center;
    color: brown;
    padding :10px;
    
    font-family: 'Lobster', cursive;
}
legend{
    font-size: 30px;
}

    </style>
<h1>PROPERTY DETAILS</h1><br>

</body>
</html>



<?php
include "connection.php";
error_reporting(0);

$query= "SELECT * FROM property";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
<fieldset class="cont">
<legend class="pp"><b>Property<b></legend>
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
<th>Operation</th>
    </tr>
        
<?php
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Ppid']."</td>
    <td>".$result['Pid']."</td>
    <td>".$result['No_room']."</td>
    <td>".$result['No_bedroom']."</td>
    <td>".$result['Size']."</td>
    <td>".$result['Price']."</td>
    <td>".$result['Type']."</td>
    <td>".$result['Town']."</td>
    <td>".$result['Village_street']."</td>
    <td>".$result['Home_no']."</td>
    <td>".$result['Avalability']."</td>    
    <td><a href='client_login_page.php?pp=$result[Ppid] & pd=$result[Pid] & rm=$result[No_room] & bd=$result[No_bedroom] & sz=$result[Size] & pc=$result[Price] & tp=$result[Type] & tn=$result[Town] & vs=$result[Village_street] & hn=$result[Home_no] & av=$result[Avalability]'><button>Buy</button></a></td> 
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
</fieldset>
