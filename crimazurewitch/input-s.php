<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.5; url=./salvation.html" />
        <link rel="icon" type="image/x-icon" href="img/finale-s.png">
        <link rel="stylesheet" href="php.css">
    </head>
    <body>

    <p>Redirecting...</p>
    <?php
    
    $destination = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["id"]) {
        switch ($_POST["id"]) {
            case "self":
                $destination = "./end/SELF-Reveal.html";
                break;
            case "firstbreathpuzzle":
                $destination = "./end/NA-Reveal.html";
                break;
            case "thisisatest":
                $destination = "./img/jacket-na.png";
                break;
            default:
                $destination = "./endpoint.html";
                break;
        }
        # $destination = ($_POST["id"] == "Crimson") ? "../index.html" : "./endpoint.html"; # Replace paths and true condition with your stuff
    }

    header("Location: {$destination}", true, 301);
    exit();

    ?>
    </body>
</html>