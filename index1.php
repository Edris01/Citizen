<?php
    include_once "head.php";
?>

    <div>
        <h1>Register</h1>
        <p>Already have an account? <a href="login.php">Log in</a></p>

        <form action="./register-inc.php" method="post">
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            <input type="password" name="password_1" placeholder="Password">
            <input type="password" name="password_2" placeholder="Confirm Password">
            <button class="" type="submit" name="register_user">Sign Up</button>
        </form>
    </div>

<?php
    require_once "footer.php";
?>