<?php

if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;
   }

if (isset($_SESSION['message'])) {
$message = $_SESSION['message'];
}   

?><!doctype html>
<html lang="en">
    <head>
        <title>PHP Motors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/phpmotors/css/normalize.css" media="screen">
        <link rel="stylesheet" href="/phpmotors/css/main.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Quantico&display=swap" rel="stylesheet" media="screen">
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
        </header>
        <nav>
            <?php // include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/nav.php'; ?>
            <?php echo $navList; ?>
        </nav>
        <main>
            <section class="paddingleftright">
                <h1>Vehicle Management</h1>
                <ul>
                    <li><a class="block" href="/phpmotors/vehicles/?action=addclassification">Add Classification</a></li>
                    <li><a class="block" href="/phpmotors/vehicles/?action=addvehicle">Add Vehicle</a></li>
                </ul>             
            </section>
            <?php
                if (isset($message)) { 
                    echo $message; 
                } 
                if (isset($classificationList)) { 
                    echo '<h2 class="paddingleftright">Vehicles By Classification</h2>'; 
                    echo '<p class="paddingleftright">Choose a classification to see those vehicles</p>'; 
                    echo $classificationList; 
                }
            ?>
            <noscript>
            <p><strong>JavaScript Must Be Enabled to Use this Page.</strong></p>
            </noscript>
            <table id="inventoryDisplay"></table>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
        </footer>
        <script src="../js/inventory.js"></script>
    </body>
</html><?php unset($_SESSION['message']); ?>