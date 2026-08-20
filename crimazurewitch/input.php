<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.5; url=./endpoint.html" />
        <link rel="icon" type="image/x-icon" href="img/finale.png">
        <link rel="stylesheet" href="php.css">
    </head>
    <body>

    <p>Redirecting...</p>
    <?php
    
    $destination = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["id"]) {
        switch ($_POST["id"]) {
            case "hearttearingretaliation":
                $destination = "./crimson/SS-Reveal.html";
                break;
            case "whiteball":
                $destination = "./crimson/GE-Reveal.html";
                break;
            case "crystalheart":
                $destination = "./crimson/RV-Reveal.html";
                break;
            case "resent-renew":
                $destination = "./crimson/CD-Reveal.html";
                break;
            case "fracturedgate":
                $destination = "./shatter.html";
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