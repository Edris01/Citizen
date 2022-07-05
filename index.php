<?php
    require_once "head1.php";
?>

    <!-- code for viewing data from the database -->
    <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($db, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['username'] . "<br>";
            }
        } else {
            echo 'No result found.';
        }
    ?>

<?php
    include_once "footer.php";
?>