<?php
  require_once('../logic/server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My System</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
</head>
<body>
    
<header>
    <nav>
        <ul class="">
        <form action="" method="post">
          <li class=""><a href="index.php?logout='1'" class="logout" name="logout">Log Out</a></li>
          <!-- <input type="button" name="logout" class="logout" value="Log Out"> -->
        </form>
      </ul>
    </nav>
</header>