<?php
include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>Owner Registration page</title>
</head>
<body>
<style>
body{
    background-image: url("image/property_bc5.jpg");
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
        color: darkred;
        background-color: darkgray;
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


<h1>WELCOME TO OWNER REGISTRATION PAGE</h1>
<main>
<div class="cont">
    <form action="" method="post">
        <p><input type="text" name="Pid" id="Pid" placeholder="Enter your Owner id" required></p>
        <p><input type="text" name="Name" id="Name" placeholder="Enter your Name" required></p>
        <p><input type="text" name="Town" id="Town" placeholder="Enter your Town" required></p>
        <p><input type="text" name="Village_street" id="Village_street" placeholder="Enter your village_street" required></p>
        <p><input type="text" name="Home_no" id="Home_no" placeholder="Enter your Home_no" required></p>
        <p><input type="text" name="Username" id="Username" placeholder="Enter your Username" required></p>
        <p><input type="text" name="Password" id="Password" placeholder="Enter your Password" required></p>
        <p><input type="text" name="Phone_no" id="Phone_no" placeholder="Enter your Phone_no" required></p>
        <p><input type="text" name="Property_Ppid" id="Property_Ppid" placeholder="Enter your Property_Ppid" required></p>


        <input type="submit" class="btn" name="submit" value="Register">
    </form>

    </div>
</main>

<?php

if(isset($_POST["Pid"])){
      
    $id = $_POST["Pid"];
    $nm = $_POST["Name"];
    $tn = $_POST["Town"];
    $vs = $_POST["Village_street"];
    $hn = $_POST["Home_no"];
    $us = $_POST["Username"];
    $pass =$_POST["Password"];
    $pn = $_POST["Phone_no"];
    $ppid=$_POST["Property_Ppid"];
    
    if($id!="" && $nm!="" && $tn!="" && $vs!="" && $hn!="" && $us!="" && $pass!="" && $pn!="" && $ppid!=""){
    $query= "INSERT INTO owner VALUES('$id','$nm','$tn','$vs','$hn','$us','$pass','$pn','$ppid')";
    
    $data= mysqli_query($conn,$query);
    
    if($data){
        echo "Thanks for inserting data";
    }
      
      }
      else{
          echo "All the fields are required";
      }
    
    }


?>


</body>
</html>