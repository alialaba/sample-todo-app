<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:../index.php");
}
?>


<?php include "inc/head.php" ?>

<body>
    <div class="container">
        <?php include "inc/header.php" ?>
        <section>
            <div class="content">
                <ul id="list">
                    <li class="item">
                        <i class="far fa-circle co" job="complete"></i>
                        <p class="text">Laptop</p>
                        <i class="fas fa-trash-alt de" job="delete"></i>
                    </li>
                </ul>
                <div class="add-item">
                    <i class="fas fa-plus-circle"></i>
                    <input type="text" id="input" placeholder="Enter an item">
                </div>
            </div>

        </section>
    </div>
    <script src="../JS/index.js"></script>
</body>

</html>