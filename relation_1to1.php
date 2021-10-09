<?php 
require "connection.php";
$search = $_GET['search'];
$sql= "SELECT users.name, users.email,frameworks.stack_developer,frameworks.frameworks
        From users 
        INNER JOIN frameworks
        ON frameworks.id = users.id
        WHERE frameworks.frameworks = '$search'";
         

$query= mysqli_query($db,$sql);


$result= mysqli_fetch_all($query);


?>