<?php
require '../vendor/autoload.php';



use Wild\App\hello;

$hello = new \Wild\App\hello();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer</title>
</head>
<body>
    <?php echo $hello->talk(); ?>
</body>
</html>


