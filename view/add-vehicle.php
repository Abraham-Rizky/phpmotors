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
            <section class="paddingleftright">
                <h1>Add Vehicle</h1>
                <div class="margintopbottom"><strong>*Note all fields are required</strong></div>
                <?php
                    if (isset($message)) {
                    echo $message;
                    }
                ?>

                <form action="/phpmotors/vehicles/" method="post">
                <?php
                    if (isset($dropdown)) {
                    echo $dropdown;
                    }
                ?>
                    <label for="invMake">Make</label>
                    <input type="text" name="invMake" id="invMake" placeholder="Enter Car Maker" autofocus autocomplete="off">
                    <label for="invModel">Model</label>
                    <input type="text" name="invModel" id="invModel" placeholder="Enter Car's Model" autocomplete="off">
                    <label for="invDescription">Description</label>
                    <input type="text" name="invDescription" id="invDescription" placeholder="Enter description" autocomplete="off">
                    <label for="invImage">Image path</label>
                    <input type="text" name="invImage" id="invImage" placeholder="Enter image path" autocomplete="off" value="/phpmotors/images/no-image.png">
                    <label for="invThumbnail">Thumbnail path</label>
                    <input type="text" name="invThumbnail" id="invThumbnail" placeholder="Enter thumbnail path" autocomplete="off" value="/phpmotors/images/no-image.png">
                    <label for="invPrice">Price</label>
                    <input type="number" name="invPrice" id="invPrice" placeholder="Enter car's price" autocomplete="off">
                    <label for="invStock"># in stock</label>
                    <input type="number" name="invStock" id="invStock" placeholder="Enter inventory" autocomplete="off">
                    <label for="invColor">Color</label>
                    <input type="text" name="invColor" id="invColor" placeholder="Enter car's color" autocomplete="off">
                    <input type="submit" name="Submit" value="Add Vehicle">
                    <input type="hidden" name="action" value="addVehicle">
                </form>
            </section>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
        </footer>
    </body>
</html>