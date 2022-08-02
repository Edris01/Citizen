<?php

if (isset($_POST["register_user"])) {
    //add database connection
    require 'database.php';

    $username = $_POST['username'];
    $regno = $_POST['regno'];
    $passcode = $_POST['passcode'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($username) || empty($regno) || empty($passcode) || empty($confirmPassword)) {
        header("Location: ./register.php?error=emptyfields&username=".$username);
        exit();

    } else if (!preg_match("/^[a-zA-z]*/", "$username")) {
        header("Location: ./register.php?error=invalidusernames&username=".$username);
        exit();
    } else if ($passcode !== $confirmPassword) {
        header("Location: ./register.php?error=passwordsdonotmatch&username=".$username);
        exit();
    } else {
        $sql = "SELECT username FROM register WHERE username = ?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./register.php?error=sqlerror");
        exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ./register.php?error=usernametaken");
                exit();
            } else {
                $sql = "INSERT INTO register (username, regno, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($db);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ./register.php?notconnected");
                    exit();
                } else {

                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO register (username, regno, password) VALUES (?, ?, ?)";
                    
                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedpassword);
                    mysqli_stmt_execute($stmt);
                        header("Location: ./register.php?success=registered");
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
