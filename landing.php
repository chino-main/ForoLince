<?php include_once 'views/header.php'; ?>

<transparent>
    <?php include_once "views/landing/landing-windows.php"; ?>
</transparent>

<main>
    <?php include_once "views/landing/landing-navbar.php";?>
    <holder id="holder-landing">
        <?php 
            // include_once "views/landing/landing-navbar.php";
            // include_once "views/landing/landing-toolbar.php"; 
            include_once "views/landing/landing-section.php"; 
        ?>
    </holder>
</main>


<?php include_once 'views/footer.php'; ?>


