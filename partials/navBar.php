<nav>

  <?php

    if(!isset($_SESSION['id'])){
     echo '<a href="partials/Login.php">Login</a>';
     echo '<a href="partials/register.php">Register</a>';
  }else{
      echo '<a href="partials/search_result.php">Search</a>
           <a href="logout.php">
           <button type="button" name="button">logout</button></a>';

  }
  ?>




</nav>
