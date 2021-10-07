<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/login.css">
  </head>
  <body>
    <div class="loginContainer">
      <div class="registerContainer">
        <form action="../logInHandler.php" method="post">
          <div class="inputContainers">
            <h2>Log in E-mail</h2>
            <input type="text" name="logInEmail" value="">
          </div>
          <div class="inputContainers">
            <h2>Log in Password</h2>
            <input type="password" name="logInPassword" value="">
          </div>
          <button class="submitButton" type="submit" name="button">Log In</button>
        </form>
      </div>
    </div>
  </body>
</html>
