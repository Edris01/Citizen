<?php
    if(!isset($_SESSION['username'])) {
        header("location: login.php");
    }
?>
<?php
    require_once "head1.php";
?>

    <h1>Home page</h1>

<?php
    include_once "footer.php";
?>