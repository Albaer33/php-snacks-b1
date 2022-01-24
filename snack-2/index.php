<?php
$user_name = $_GET['name'];
$user_email = $_GET['mail'];
$user_age = $_GET['age'];

$name_check = false;
if (strlen($user_name) > 3) {
    $name_check = true;
}
$email_check = true;
if (strpos($user_email, '@') === false || strpos($user_email, '.') === false) {
    $email_check = false;
}

$age_check = false;
if (is_numeric($user_age)) {
    $age_check = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Controllo accesso:</h1>
    <?php if ($name_check && $email_check && $age_check) { ?>
        <h3>Accesso Riuscito</h3>
    <?php } else { ?>
        <h3>Accesso Negato</h3>
    <?php } ?>
</body>
</html>
