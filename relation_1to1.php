<?php 
require "connection.php";
$sql= "SELECT users.name, users.email,frameworks.stack_developer,frameworks.frameworks
        From users 
        INNER JOIN frameworks
        ON frameworks.id = users.id
        WHERE users.name= 'aaa'";
        

$query= mysqli_query($db,$sql);


$result= mysqli_fetch_all($query);


?>