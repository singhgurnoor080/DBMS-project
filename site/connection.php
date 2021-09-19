<?php
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="project";

 $conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "Connection successful";
}
else{
    die ("connection failed due to ".mysqli_connect_error());
}


?>