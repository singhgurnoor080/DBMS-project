<?php

include "connection.php";

$query= "INSERT INTO signin VALUES(4,'ram','ram123')";

$data= mysqli_query($conn,$query);

if($data){
    echo "Thanks for inserting data";
}



?>