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


?>


<!DOCTYPE html>
<html>
<head>
<title>Owner_edit_update page</title>
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


<h1>WELCOME TO OWNER UPDATE PAGE</h1>
<main>
<div class="cont">
    <form action="" method="GET">
        <p><input type="text" name="Pid"  placeholder="Enter your Owner id" value= "<?php echo $_GET['pp']; ?>"></p>
        <p><input type="text" name="Name"  placeholder="Enter your Name " value= "<?php echo $_GET['pd']; ?>"></p>
        <p><input type="text" name="Town"  placeholder="Enter number of Town" value= "<?php echo $_GET['rm']; ?>"></p>
        <p><input type="text" name="Village_street"  placeholder="Enter  Village_street" value= "<?php echo $_GET['bd']; ?>"></p>
        <p><input type="text" name="Home_no"  placeholder="Enter the Home_no" value="<?php echo $_GET['sz']; ?>"></p>
        <p><input type="text" name="Username"  placeholder="Enter Username" value="<?php echo $_GET['pc']; ?>"></p>
        <p><input type="text" name="Password"  placeholder=Password" value= "<?php echo $_GET['tp']; ?>"></p>
        <p><input type="text" name="Phone_no"  placeholder="Phone_no" value= "<?php echo $_GET['tn']; ?>"></p>
        <p><input type="text" name="Property_Ppid"  placeholder="Enter Property_id" value= "<?php echo $_GET['vs']; ?>"></p>
        

        <input type="submit" class="btn" name="submit" value="Update">
    </form>

    </div>
</main>

<?php

if(isset($_GET["Pid"])){
      
    $id = $_GET["Pid"];
    $nm = $_GET["Name"];
    $tn = $_GET["Town"];
    $vs = $_GET["Village_street"];
    $hn = $_GET["Home_no"];
    $us = $_GET["Username"];
    $pass =$_GET["Password"];
    $pn = $_GET["Phone_no"];
    $a = $_GET["Property_Ppid"];
    
    if($_GET['submit']){
    $query= "UPDATE owner SET Name='$nm',Town='$tn',Village_street='$vs',Home_no='$hn',Username='$us',Password='$pass',Phone_no='$pn',Property_Ppid='$a' WHERE Pid='$id'";
    
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