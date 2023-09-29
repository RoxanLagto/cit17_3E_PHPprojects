<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Constants</title>
    </head>
    <body>
        <?php
        //constant() example
            echo "<h2>Constants Example</h2>";
            define("MINSIZE", 50);
            echo MINSIZE;
            echo constant("MINSIZE");
        
        ?>
    </body>
</html>