<?php
include "connection.php";
error_reporting(0);
$_GET['pp'];
$_GET['pd'];
$_GET['rm'];
$_GET['bd'];
$_GET['sz'];
$_GET['pc'];
$_GET['tp'];
$_GET['tn'];
$_GET['vs'];
$_GET['hn'];
$_GET['av'];

?>


<!DOCTYPE html>
<html>
<head>
<title>Propert_edit_update page</title>
</head>
<body>
<style>
body{
    background-image: url("image/propertypic3.jpg");
    background-size: cover;
}

.ff{
    color:brown;
    background-color:burlywood;
}

.cont{
    max-width: 80%;
    padding: 40px;
    margin: auto;
    
}

.gg{
padding: 20px;
background-color: darkgray; 
}

    h1{
        color:black;
        background-color: blueviolet;
        text-align: center;
        padding: 20px;
    }

input{
    width: 80%;
    margin: 11px auto;
    padding: 10px;
    font-size: 15px;
    border: 2px solid black;
    border-radius: 10px;
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

</style>


<h1>WELCOME TO PROPERTY UPDATE PAGE</h1>
<main>
<div class="cont">
    <form action="" method="GET">
        <p><input type="text" name="Ppid"  placeholder="Enter your Property id" value= "<?php echo $_GET['pp']; ?>"></p>
        <p><input type="text" name="Pid"  placeholder="Enter your Owner id " value= "<?php echo $_GET['pd']; ?>"></p>
        <p><input type="text" name="No_room"  placeholder="Enter number of room" value= "<?php echo $_GET['rm']; ?>"></p>
        <p><input type="text" name="No_bedroom"  placeholder="Enter number of bedroom" value= "<?php echo $_GET['bd']; ?>"></p>
        <p><input type="text" name="Size"  placeholder="Enter the size of property" value="<?php echo $_GET['sz']; ?>"></p>
        <p><input type="text" name="Price"  placeholder="Enter The Price" value="<?php echo $_GET['pc']; ?>"></p>
        <p><input type="text" name="Type"  placeholder="type=Rent or Sale" value= "<?php echo $_GET['tp']; ?>"></p>
        <p><input type="text" name="Town"  placeholder="Enter Town" value= "<?php echo $_GET['tn']; ?>"></p>
        <p><input type="text" name="Village_street"  placeholder="Enter Village_street" value= "<?php echo $_GET['vs']; ?>"></p>
        <p><input type="text" name="Home_no"  placeholder="Enter Home_number" value= "<?php echo $_GET['hn']; ?>"></p>
        <p><input type="text" name="Avalability"  placeholder="Enter Avalability" value= "<?php echo $_GET['av']; ?>"></p>



        <input type="submit" class="btn" name="submit" value="Update">
    </form>

    </div>
</main>

<?php

if(isset($_GET["Ppid"])){
      
    $id = $_GET["Ppid"];
    $nm = $_GET["Pid"];
    $tn = $_GET["No_room"];
    $vs = $_GET["No_bedroom"];
    $hn = $_GET["Size"];
    $us = $_GET["Price"];
    $pass =$_GET["Type"];
    $pn = $_GET["Town"];
    $a = $_GET["Village_street"];
    $b = $_GET["Home_no"];
    $c = $_GET["Avalability"];
    
    if($_GET['submit']){
    $query= "UPDATE property SET Pid='$nm',No_room='$tn',No_bedroom='$vs',Size='$hn',Price='$us',Type='$pass',Town='$pn',Village_street='$a',Home_no='$b',Avalability='$c' WHERE Ppid='$id'";
    
    $data= mysqli_query($conn,$query);
    
    if($data){
        echo "Thanks for updating data";
    }
    else{
        echo "Record not Updated";
    }
    
      }
      else{
        echo "<font color= 'blue'>CLick on the update buttom to save"; 
      }
    
    }


?>


</body>
</html>