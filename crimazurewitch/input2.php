<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.5; url=./shatter.html" />
        <link rel="icon" type="image/x-icon" href="img/finale-a.png">
        <link rel="stylesheet" href="php.css">
    </head>
    <body>

    <p>Redirecting...</p>
    <?php
    
    $destination = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["id"]) {
        switch ($_POST["id"]) {
            case "rue-recollection":
                $destination = "./azure/L-Reveal.html";
                break;
            case "loathedbitter":
                $destination = "./azure/F-Reveal.html";
                break;
            case "#0000遒ｧ":
                $destination = "./azure/EDR-Reveal.html";
                break;
            case "gardensanctuary":
                $destination = "./azure/HALL-Reveal.html";
                break;
            case "thisisatest":
                $destination = "./img/jacket-na.png";
                break;
            default:
                $destination = "./shatter.html";
                break;
        }
        # $destination = ($_POST["id"] == "Crimson") ? "../index.html" : "./endpoint.html"; # Replace paths and true condition with your stuff
    }

    header("Location: {$destination}", true, 301);
    exit();

    ?>
    </body>
</html>