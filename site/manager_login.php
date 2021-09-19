<?php
session_start();
include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>manager_login_page</title>
</head>
<body>
<style>
body{
    background-image: url("image/propertypic4.jpg");
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
    width: 50%;
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



<h1>WELCOME TO MANAGER LOGIN PAGE</h1>
<main>
<div class="cont">
    <form action="" method="post">

        <p>IF YOU DON'T HAVE ACCOUNT PLEASE <a href="http://localhost/site/client_reg_page.php" target="blank"><u>Register here</u></a></p>
        <p><input type="text" name="Username" id="Username" placeholder="Enter your Username" required></p>
        <p><input type="password" name="Password" id="Password" placeholder="Enter your Password" required></p>
        

        <input type="submit" class="btn" name="submit" value="Login">
    </form>
</div>

</main>

<?php
if(isset($_POST['submit'])){

$user = $_POST['Username'];
$pwd = $_POST['Password'];
$query= "SELECT * FROM manager WHERE Username='$user'&& Password='$pwd'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total==1){
    $_SESSION['user_name']=$user;
    header('location:manager.php');
}
else{
    echo "login failed";
}

}



?>

</body>
</html>