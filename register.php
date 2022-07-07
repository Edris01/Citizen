<?php
session_start();
include_once 'server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corruption System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./login.css" />
</head>

<body>
    <div class="wrapper">
        <header>Register</header>
        <form action="" method="POST">
            <div class="field username">
                <div class="input-area">
                    <input type="text" placeholder="username" />
                    <i class="icon bi bi-envelope"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">username required</div>
            </div>
            <div class="field email">
                <div class="input-area">
                    <input type="email" placeholder="name@domain.com" />
                    <i class="icon bi bi-envelope"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password required</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" />
                    <i class="icon bi bi-lock"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password required</div>
            </div>
            <div class="field confirm_password">
                <div class="input-area">
                    <input type="confirmPassword" placeholder="Confirm Password" />
                    <i class="icon bi bi-lock"></i>
                    <i class="error error-icon bi bi-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password don`t match</div>
            </div>
            <button class="btn btn-warning" type="submit" name="login_user">
                Sign Up
            </button>
        </form>
        <div class="sign-txt text-light">Already a member? <a class="text-warning pass-txt fs-5" href="login.php">Login</a></div>
    </div>
    <script src="./script/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>