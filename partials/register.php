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

      <div class="frameworksContainer">

        <h3> Programski jezici</h3>

        <div class="frameWorksBox">
          <p> Front End Developer </p>
          <input type="checkbox" name="stack_developer" value="frontend">
        </div>
        <div class="frameWorksBox">
          <p> Angular </p>
          <input type="checkbox" name="frameworks" value="Angular_JS">
        </div>
        <div class="frameWorksBox">
          <p>Angular 2</p>
          <input type="checkbox" name="frameworks" value="Angular_2">
        </div>
        <div class="frameWorksBox">
          <p> React </p>
          <input type="checkbox" name="frameworks" value="Angular_2">
        </div>
        <div class="frameWorksBox">
          <p> Vue </p>
          <input type="checkbox" name="frameworks" value="Vue">
        </div>

        <div class="frameWorksBox">
          <p> Back End Developer </p>
          <input type="checkbox" name="stack_developer" value="backend">
        </div>
        <div class="frameWorksBox">
          <p> PHP </p>
          <input type="checkbox" name="frameworks" value="PHP">
        </div>
        <div class="frameWorksBox">
          <p> Symfony </p>
          <input type="checkbox" name="frameworks" value="Symfony">
        </div>
        <div class="frameWorksBox">
          <p> Laravel </p>
          <input type="checkbox" name="frameworks" value="Laravel">
        </div>
        <div class="frameWorksBox">
          <p> NODE_JS </p>
          <input type="checkbox" name="frameworks" value="Express">
        </div>
        <div class="frameWorksBox">
          <p>NestJS</p>
          <input type="checkbox" name="frameworks" value="NestJS">
        </div>
      </div>

      <button type="submit" name="button">Register</button>
    </form>
  </div>
</body>

</html>
