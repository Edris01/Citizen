<?php
session_start();

//database connection 
$db = mysqli_connect('localhost', 'root', '', 'test1');
    if (!$db) {
        die("database not connected");
    }

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $error = array();

    $password = md5($password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "";
        header('Location: index.php');
    } else {
        array_push($errors, "username and password dont match");
    }
}






















//code for viewing data from the database
        // $sql = "SELECT * FROM users";
        // $result = mysqli_query($db, $sql);
        // $rowCount = mysqli_num_rows($result);

        // if($rowCount > 0) {
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         echo $row['username'] . "<br>";
        //     }
        // } else {
        //     echo 'No result found.';
        // }