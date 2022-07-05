<?php
    include_once "head.php"
?>

    <div>
        <h1> Log In</h1>
        <p>No account? <a href="register.php">Register here!</a></p>

        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            <input type="password" name='password' placeholder='Password' value="<?php echo $password; ?>">
            <button type="submit" name="login_user">LOGIN</button>
        </form>
    </div>

<?php
    require_once "footer.php";
?>