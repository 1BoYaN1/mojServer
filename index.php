 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/index.css">
  </head>
  <body>
    <?php session_start(); ?>

    <?php
    // sql connection
     require 'connection.php';

     // $sql = "SELECT * FROM users";


     // $query = mysqli_query($db,$sql); //mysql result set
     // $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    //  echo "<pre>";
    //  var_dump($result);
    //  echo "</pre>";

     // echo $result[1]['name'];

     ?>
    <header>
      <?php require "partials/navBar.php" ?>

      <img src="assets/images/q.png" alt="">

      <h1>Qantox test</h1>

      <div
        class="widgetBox">

        <?php
          if(isset($_SESSION['id'])){

          }else{

          }
        ?>

      </div>
    </header>

  </body>
</html>
