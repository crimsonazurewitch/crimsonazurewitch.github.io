<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
?>

</body>
</html>