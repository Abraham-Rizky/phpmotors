<!doctype html>
<html lang="en">
    <head>
        <title>PHP Motors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css" media="screen">
        <link rel="stylesheet" href="css/main.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Quantico&display=swap" rel="stylesheet" media="screen">
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
        </header>
        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/nav.php'; ?>
        </nav>
        <main>
            <section id="landing-page">
                <h1>Welcome to PHP Motors!</h1>
                <p>
                <strong>DMC Delorean</strong>
                <br>3 Cup Holder
                <br>Superman doors
                <br>Fuzzy dice!
                </p><br>
                <a class="button" href="#" title="Own this vehicle today!">Own Today</a>
            </section>
            <section id="main-content">
                <div>
                    <h2>DMC Delorean Reviews</h2>
                    <ul>
                        <li>"So fast its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!" (5/5)</li>
                        <li>"The most futuristic ride of our day." (4.5/5)</li>
                        <li>"80's livin and I love it!" (5/5)</li>
                    </ul>
                </div>
                <div>
                    <h2>Delorean Upgrades</h2>
                    <div class="figure-container">
                        <div class="figure">
                            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Picture of a flux capasitor">
                        </div>
                        <div class="figure">
                            <img src="/phpmotors/images/upgrades/flame.jpg" alt="Picture of a flame decals">
                        </div>
                    </div>
                    <div class="figure-container">
                        <div class="figurecaption"><a href="#" title="Flux capasitor page">Flux Capasitor</a></div>
                        <div class="figurecaption"><a href="#" title="Flame decals page">Flame Decals</a></div>
                    </div>
                    <div class="figure-container">
                        <div class="figure">
                            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Picture of a bumper sticker">
                        </div>
                        <div class="figure">
                            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Picture of a hub cap">
                        </div>
                    </div>
                    <div class="figure-container">
                        <div class="figurecaption"><a href="#" title="Bumper stickers page">Bumper Stickers</a></div>
                        <div class="figurecaption"><a href="#" title="Hub caps page">Hub Caps</a></div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
        </footer>
    </body>
</html>