<?php
session_start();
include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>client_login_page</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
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
    max-width: 50%;
    padding: 20px;
    margin: auto;
    border-color: brown;
    border-radius: 20px;
}

.gg{
padding: 20px;
background-color: darkgray; 
}

    h1{
        color:black;
        
        text-align: center;
        padding: 20px;
        font-family: 'Lobster', cursive;
    }

input{
    width: 50%;
    margin: 11px auto;
    padding: 10px;
    font-size: 15px;
    border: 2px solid black;
    border-radius: 10px;
}

.pp{
    font-size: 30px;
    color: darkblue;
}
 
button{
    
    border-radius: 20px;
    cursor: pointer;
    border-color: black;
    padding: 10px;
    font-size: 20px;
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


.btn{
    border-radius: 20px;
    cursor: pointer;
    border-color: black;
    padding: 10px;
    font-size: 20px;
    
    position: relative;
    background-image: url("image/sky1.jpg");
}
.btn:hover{
    animation-name: log;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    background-color: #09A7A1;
    transform: scale(1.1) rotate(10deg);
    
    box-shadow: 25px 10px 10px 10px gray;
}
@keyframes log{
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

</style>



<h1>WELCOME TO CLIENT LOGIN PAGE</h1>
<main>
<fieldset class="cont">
<legend class="pp"> <b>Client Login</b></legend>
    <form action="" method="post">

        
        <p><input type="text" name="Username" id="Username" placeholder="Enter your Username" required></p>
        <p><input type="password" name="Password" id="Password" placeholder="Enter your Password" required></p>
        

        <input type="submit" class="btn" name="submit" value="Login">

        <p><a href="http://localhost/site/client_reg_page.php" target="blank"><u><button>Register here</button></u></a></p>

    </form>
</fieldset>

</main>

<?php
if(isset($_POST['submit'])){

$user = $_POST['Username'];
$pwd = $_POST['Password'];
$query= "SELECT * FROM client WHERE Username='$user'&& Password='$pwd'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total==1){
    $_SESSION['user_name']=$user;
    header('location:buy_contact.php');
}
else{
    echo "login failed";
}

}



?>

</body>
</html>