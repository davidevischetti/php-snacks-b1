<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_at = stripos($email, '@');
        if (strlen($name) > 3 && stripos($email, '@') && stripos($email, '.', $_at) && is_numeric($age)) {
            echo "<div>Accesso riuscito</div>";
        } else {
            echo "<div>Accesso negato</div>";
        }
    ?>
</body>
</html>