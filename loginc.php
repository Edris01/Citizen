<?php

    if (isset($_POST["submit"])) {
        require 'db.php';

        $regno = $_POST['regno'];
        $passcode = $_POST['passcode'];

        if (empty($_POST['regno']) || empty($_POST['passcode'])) {
            header("Location: ../login.php?error=emptyfeilds");
            exit();
        } else {
            $sql = "SELECT * FROM login WHERE regno = ?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../login.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $regno);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if($row = mysqli_fetch_assoc($result)) {
                    $passCheck = password_verify($passcode, $row['passcode']);
                    if($passCheck == false) {
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    } elseif ($passCheck == true) {
                        session_start();
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionRegno'] = $row['regno'];
                        header("Location: ../index.php?success=loggedin");
                        exit();
                    } else {
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                } else {
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    } else {
        header("Location: ../login.php?error=accessforbidden");
        exit();
    }

?>