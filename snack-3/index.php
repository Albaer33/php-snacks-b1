<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array di numeri casuali non ripetuti:</h1>
    <?php
    $random_numbers = [];
    while (!(count($random_numbers) === 15)) {
        $this_number = rand(1,50);
        if (!in_array($this_number, $random_numbers)) {
            $random_numbers[] = $this_number;
        }
    }
    var_dump($random_numbers);
    ?>
</body>
</html>