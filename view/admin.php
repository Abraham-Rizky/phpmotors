<?php
if(!$_SESSION['loggedin']){
    header('Location: /phpmotors/');
  } 

  if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
  }
  
  $clientFirstname = $_SESSION['clientData']['clientFirstname'];
  $clientLastname = $_SESSION['clientData']['clientLastname'];
  $clientEmail = $_SESSION['clientData']['clientEmail'];
  $clientLevel = $_SESSION['clientData']['clientLevel'];

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
                <h1><?php echo "$clientFirstname $clientLastname";?></h1>
                <p>You are logged in.</p>
                <ul>
                    <li>First Name: <?php echo $clientFirstname; ?></li>
                    <li>Last Name: <?php echo $clientLastname; ?></li>
                    <li>Email: <?php echo $clientEmail; ?></li>
                    <li>Client Level: <?php echo $clientLevel; ?></li>
                </ul>
                <?php
                    if($clientLevel > 1){
                        echo '<h2>Account Management</h2>';
                        echo '<p>Use this link to update account information</p>';
                        echo '<p><a href="/phpmotors/vehicles/">Vehicle Management</a></p>';
                    }
                ?>
            </section>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
        </footer>
    </body>
</html>