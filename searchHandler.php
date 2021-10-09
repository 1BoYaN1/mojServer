<?php
  require 'connection.php';

$search = $_GET['searchQuerry']?? "";
$sql= "SELECT users.name, users.email,frameworks.stack_developer,frameworks.frameworks
        From users
        INNER JOIN frameworks
        ON frameworks.id = users.id
        WHERE frameworks.frameworks = '$search'
        OR name='$search'
        OR email='$search'
        OR stack_developer='$search'
        OR password='$search'";


$query= mysqli_query($db,$sql);
$result= mysqli_fetch_all($query);

// var_dump($result[0]);
if(isset($result[0])){
  foreach ($result[0] as $value) {
    echo "$value <br>";
  }
}else{
  echo 'no result found';
}


  // $searchQuerry = $_POST['searchQuerry'];
  // $sql = "SELECT * FROM users WHERE name='$searchQuerry' OR password='$searchQuerry' OR email='$searchQuerry'";
  // $query = mysqli_query($db,$sql);
  // $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
  // echo "<pre>";
  // var_dump($result);
  // echo "</pre>";


  // echo 'id: ' . $result[0]['id'];
  // echo "<br>";
  // echo 'Name: ' . $result[0]['Name'];
  // echo "<br>";
  // echo 'Email: ' . $result[0]['email'];
  // echo "<br>";
  // echo 'Password: ' . $result[0]['password'];
 ?>
