<!DOCTYPE html>
<html>
    <body>

    <h1></h1>
    <?php
    
    $destination = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["id"]) {
        $destination = ($_POST["id"] == "Crimson") ? "../index.html" : "./atlastwearriveattheendpoint.html"; # Replace paths and true condition with your stuff
    }

    header("Location: {$destination}", true, 301);
    exit();

    ?>

    </body>
</html>