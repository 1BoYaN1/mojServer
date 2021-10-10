<?php
  require "connection.php";


  $registerName = $_POST['registerName'];
  $registerEmail = $_POST['registerEmail'];
  $registerPassword = $_POST['registerPassword'];

// sacuvaj juzera
  $sql = "INSERT INTO users
          VALUES (NULL,'$registerName','$registerEmail','$registerPassword')";
  $query = mysqli_query($db,$sql);

  $sqlSecund = "SELECT id FROM users WHERE email = '$registerEmail' AND password = '$registerPassword'";
  $querySecund = mysqli_query($db,$sqlSecund);
  $result = mysqli_fetch_assoc($querySecund);

  $_SESSION['id'] = $result['id'];
  $id = $_SESSION['id'];


  // var_dump($_SESSION['id']);
  // echo '<br>';
  // echo $_SESSION['id'];


  // var_dump($result['id']);
  // echo $result['id'];

  // $frontend = $_POST['frontend'];
  // $Angular = $_POST['Angular'];
  // $Angular_2 = $_POST['Angular_2'];
  // $React = $_POST['React'];
  // $Vue = $_POST['Vue'];
  // $backend = $_POST['backend'];
  // $PHP = $_POST['PHP'];
  // $Symfony = $_POST['Symfony'];
  // $Laravel = $_POST['Laravel'];
  // $NODE_JS = $_POST['NODE_JS'];
  // $NestJS = $_POST['NestJS'];

  // $insertFrontEnd = '';
  if(isset($_POST['frontend'])){
    $frontend = $_POST['frontend'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','frontend','$frontend')");
  }
  if(isset($_POST['PHP'])){
    $PHP = $_POST['PHP'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','backend','$PHP')");
  }
  if(isset($_POST['Angular'])){
    $Angular = $_POST['Angular'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','frontend','$Angular')");
  }
  if(isset($_POST['Angular_2'])){
    $Angular_2 = $_POST['Angular_2'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','frontend','$Angular_2')");
  }
  if(isset($_POST['React'])){
    $React = $_POST['React'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','frontend','$React')");
  }
  if(isset($_POST['Vue'])){
    $Vue = $_POST['Vue'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','frontend','$Vue')");
  }
  if(isset($_POST['backend'])){
    $backend = $_POST['backend'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','backend','$backend')");
  }
  if(isset($_POST['Symfony'])){
    $Symfony = $_POST['Symfony'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','backend','$Symfony')");
  }
  if(isset($_POST['Laravel'])){
    $Laravel = $_POST['Laravel'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','backend','$Laravel')");
  }
  if(isset($_POST['NODE_JS'])){
    $NODE_JS = $_POST['NODE_JS'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','backend','$NODE_JS')");
  }
  if(isset($_POST['NestJS'])){
    $NestJS = $_POST['NestJS'];
    mysqli_query($db,"INSERT INTO frameworks VALUES (NULL,'$id','backend','$NestJS')");
  }
  // if(isset($frontend)){
  //   $frontend = $_POST['frontend'];
  //   $insertFrontEnd = "INSERT INTO frameworks VALUES (NULL,'$id','$frontend','$frontend')";
  //   $frontEndQuery = mysqli_query($db,$insertFrontEnd);
  // };
  // if(isset($backend)){
  //   $PHP = $_POST['PHP'];
  //   $insertBackEnd = "INSERT INTO frameworks VALUES (NULL,'$id','$backend','$PHP')";
  //   mysqli_query($db,$insertBackEnd);
  // };
  // if(isset($React)){
  //   $insertFrontEnd = "INSERT INTO frameworks VALUES (NULL,'$id',NULL,'$React')";
  //   $frontEndQuery = mysqli_query($db,$insertFrontEnd);
  // }




  // if($query){
  //   // header('Location:index.php');
  // }
?>
