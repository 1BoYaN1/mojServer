<?php
  require "connection.php";
  session_start();

  $id = $_SESSION['id'];
  $registerName = $_POST['registerName'];
  $registerEmail = $_POST['registerEmail'];
  $registerPassword = $_POST['registerPassword'];
  $frontend = $_POST['frontend'];
  $Angular = $_POST['Angular'];
  $Angular_2 = $_POST['Angular_2'];
  $React = $_POST['React'];
  $Vue = $_POST['Vue'];
  $backend = $_POST['backend'];
  $PHP = $_POST['PHP'];
  $Symfony = $_POST['Symfony'];
  $Laravel = $_POST['Laravel'];
  $NODE_JS = $_POST['NODE_JS'];
  $NestJS = $_POST['NestJS'];
  


  $sql = "INSERT INTO users
          VALUES (NULL,'$registerName','$registerEmail','$registerPassword')
          INSERT INTO frameworks
          VALUES (NULL,'$id', '$frontend','$Angular')";
  $query = mysqli_query($db,$sql);

  if($query){
    header('Location:index.php');
  }
?>
