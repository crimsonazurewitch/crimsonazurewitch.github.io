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
            case "sacrifice":
                $destination = "./SH-Reveal.html";
                break;
            case "frozen forever":
                $destination = "./GE-Reveal.html";
                break;
            case "alternate-gate":
                $destination = "./RV-Reveal.html";
                break;
            case "?":
                $destination = "./CD-Reveal.html";
                break;
            case "":
                $destination = "./img/jacket-na.png";
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