<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/login.css">
  </head>
  <body>
    <div class="registerContainer">
      <form class="" action="../registrationHandler.php" method="post">
        <h2>Name</h2>
        <input type="text" required name="registerName" value="">
        <h2>Email</h2>
        <input type="email" required name="registerEmail" value="">
        <h2>Password</h2>
        <input type="password" required name="registerPassword" value="">

        <input type="radio" name="gender" value="musko" required> Musko
        <input type="radio" name="gender" value="zensko"> Zensko <br><br>

        <div>
        <p> Programski jezici</p>
      
        <p> Front End Developer </p>
        <p> Angular </p>
          <input type="checkbox" name="languanges[]" value="Angular_JS"> Angular_JS
          <input type="checkbox" name="languanges[]" value="Angular_2"> Angular_2
        <p> React </p>
          <input type="checkbox" name="languanges[]" value="Angular_2"> Angular_2
        <p> Vue </p>
        <input type="checkbox" name="languanges[]" value="Vue"> Vue


        <p> Back End Developer </p>
        <p> PHP </p>
          <input type="checkbox" name="languanges[]" value="Symfony"> Symfony
          <input type="checkbox" name="languanges[]" value="Laravel"> Laravel
          
        <p> NODE_JS </p>
          <input type="checkbox" name="languanges[]" value="Express"> Express
          <input type="checkbox" name="languanges[]" value="NestJS"> NestJS

        </div>

        <button type="submit" name="button">Register</button>
      </form>
    </div>
  </body>
</html>
