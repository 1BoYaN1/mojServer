<?php
  require 'connection.php';

  $searchQuerry = $_POST['searchQuerry'];
  $sql = "SELECT * FROM users WHERE name='$searchQuerry' OR password='$searchQuerry' OR email='$searchQuerry'";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
  echo "<pre>";
  var_dump($result);
  echo "</pre>";


  echo 'id: ' . $result[0]['id'];
  echo "<br>";
  echo 'Name: ' . $result[0]['Name'];
  echo "<br>";
  echo 'Email: ' . $result[0]['email'];
  echo "<br>";
  echo 'Password: ' . $result[0]['password'];
 ?>
