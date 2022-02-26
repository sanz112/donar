<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(!isset($_SESSION["userIconSmsId"])) {
    echo '<h1> hello </h1>';
} else {
    echo '<h2> hi </h2>';
}
?>
</body>
</html>