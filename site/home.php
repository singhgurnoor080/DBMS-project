<!DOCTYPE html>
<html>
<head>
<title>Home page</title>

</head>

<body>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <style>
body{
    

    background-image: url("image/propertypic4.jpg");
    background-size: cover;
}


p{
    font-size: 20px;
    text-align: center;
}

button{
    font-family: 'Lobster', cursive;
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



h1{
    font-size: 50px;
    text-align: center;
    color: blue;
    padding :10px;
    
    font-family: 'Lobster', cursive;
}
h3{
    font-size: 27px;
    color: brown;
    text-align: center;
}
header{
    position: relative;
}
.left{
    float: left;
}
.right{
    float: right;
}
.middle{
    text-align: center;
}

</style>




<main>
<header>
<h1>BAGA STREET PROPERTIES</h1>
<h3>Welcome to our website. We are glad to serve you.</h3>
</header>
<div>
<p><a href="http://localhost/site/client_reg_page.php" target="blank"><u><button><b>Client Registration</b></button></u></a></p>
<p><a href="http://localhost/site/client_login_page.php" target="blank"><u><button><b>Client Login</b></button></u></a></p>
<p><a href="http://localhost/site/agent_login_page.php" target="blank"><u><button><b>Agent Login</b></button></u></a></p>
<p><a href="http://localhost/site/agent.php" target="blank"><u><button><b>Agent Registration</b></button></u></a></p>
<p><a href="http://localhost/site/buy.php" target="blank"><u><button><b>Property Details</b></button></u></a></p>

<p><a href="http://localhost/site/manager_login.php" target="blank"><u><button><b>Manager Login</b></button></u></a></p>
</div>
</main>


    </body>
    </html>

    