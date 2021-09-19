<?php
include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>Client Registration page</title>
</head>
<body>
<style>
body{
    background-image: url("image/propertypic2.jpg");
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


<h1>WELCOME TO CLIENT REGISTRATION PAGE</h1>
<main>
<div class="cont">
    <form action="client_reg_page.php" method="post">
        <p><input type="text" name="Cid" id="Cid" placeholder="Enter your Client id" required></p>
        <p><input type="text" name="Name" id="Name" placeholder="Enter your Name" required></p>
        <p><input type="text" name="Town" id="Town" placeholder="Enter your Town" required></p>
        <p><input type="text" name="Village_street" id="Village_street" placeholder="Enter your village_street" required></p>
        <p><input type="text" name="Home_no" id="Home_no" placeholder="Enter your Home_no" required></p>
        <p><input type="text" name="Username" id="Username" placeholder="Enter your Username" required></p>
        <p><input type="text" name="Password" id="Password" placeholder="Enter your Password" required></p>
        <p><input type="text" name="Phone_no" id="Phone_no" placeholder="Enter your Phone_no" required></p>

        <input type="submit" class="btn" name="submit" value="Register">
    </form>

    </div>
</main>

<?php

if(isset($_POST["Cid"])){
      
    $id = $_POST["Cid"];
    $nm = $_POST["Name"];
    $tn = $_POST["Town"];
    $vs = $_POST["Village_street"];
    $hn = $_POST["Home_no"];
    $us = $_POST["Username"];
    $pass =$_POST["Password"];
    $pn = $_POST["Phone_no"];
    
    if($id!="" && $nm!="" && $tn!="" && $vs!="" && $hn!="" && $us!="" && $pass!="" && $pn!=""){
    $query= "INSERT INTO client VALUES('$id','$nm','$tn','$vs','$hn','$us','$pass','$pn')";
    
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