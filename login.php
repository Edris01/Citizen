<?php
  session_start();
  include_once( './includes/logic/server.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Citizen | Login</title>
    <!-- bootstrap css  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- bootstrap icons  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <!-- customized css  -->
    <link rel="stylesheet" href="./assets/css/login.css" />

  </head>
  <body>
    <div class="wrapper">
      <header>Login</header>
      <form action="./includes/logic//loginc.php" method="POST">
        <div class="field email">
          <div class="input-area">
            <input type="text" placeholder="Email" />
            <i class="icon bi bi-envelope"></i>
            <i class="error error-icon bi bi-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Email required</div>
        </div>
        <div class="field password">
          <div class="input-area">
            <input type="password" placeholder="Password" />
            <i class="icon bi bi-lock"></i>
            <i class="error error-icon bi bi-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Password required</div>
        </div>
        <div class="">
          <a class="pass-txt text-light" href="#">Forgot Password?</a>
        </div>
        <button class="btn btn-warning" type="submit" name="login_user">
          Login
        </button>
      </form>
    <div class="sign-txt text-light">Not yet a member? <a class="text-warning pass-txt fs-5" href="register.php">Sign up</a></div>
    </div>
    
    <!-- JQuery -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- login js  -->
    <script src="./assets/js/login.js"></script>
  </body>
</html>
