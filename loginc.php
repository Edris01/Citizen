<?php

// login action for students
$error = array();

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    // if (empty($username)) {
    //     array_push($errors, 'username is required');
    // }
    // if (!preg_match("/^[a-zA-z-Z0-9]*/", $username)) {
    //     array_push($error, 'username must not contain symbols');
    // }
    // if (empty($password)) {
    //     array_push($errors, 'password is required');
    // }

    // if (count($errors) == 0) {
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "";
            header('Location: StudentPayments.php');
        } else {
            array_push($errors, "username and password dont match");
        }
    // }
}

?>