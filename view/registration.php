<!doctype html>
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
            <section>
                <?php
                    if (isset($message)) {
                    echo $message;
                    }
                ?>
                <form action="/phpmotors/accounts/index.php" method="post">
                        <h1>Register</h1>
                        <div>
                            <label for="clientFirstname">First Name</label>
                            <input type="text" name="clientFirstname" id="clientFirstname" placeholder="Your First Name" autofocus autocomplete="off" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} ?> required>
                        </div>
                        <div>
                            <label for=" clientLastname">Last Name</label>
                            <input type="text" name="clientLastname" id="clientLastname" placeholder="Your Last Name" autocomplete="off" <?php if(isset($clientLastname)){echo "value='$clientLastname'";} ?> required>
                        </div>
                        <div>
                            <label for="clientEmail">Email</label>
                            <input type="email" name="clientEmail" id="clientEmail" placeholder="Your Email" autocomplete="off" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
                        </div>
                        <div>
                            <label for="clientPassword">Password</label>
                            <input type="password" name="clientPassword" id="clientPassword" placeholder="Your Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
                            <span>*Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
                        </div>
                        <div>
                            <input type="submit" name="submit" id="regbtn" value="Register">
                            <input type="hidden" name="action" value="register">
                        </div>
                </form>  
            </section>        
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
        </footer>
    </body>
</html>