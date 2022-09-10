<!doctype html>
<html lang="en">
<?php
include 'components/head.view.php'; ?>
<body>
<div class="wrapper">
    <?php
    if (isset($_SESSION['user']))
        include 'components/header.view.php'
    ?>
    <div class="main">

        <?php
        if (!isset($_SESSION['user'])) {
            include 'components/formLogin.view.php';
            include 'components/formRegister.view.php';
        }
        ?>

    </div>
</div>

<script src="./../static/js/formsHandlers.js"></script>
</body>
</html>