<?php
    $matches = [
        [
            'firstTeam' => 'Olimpia Milano',
            'secondTeam' => 'Cantù',
            'firstTeamPoints' => 112,
            'secondTeamPoints' => 53,
        ],
        [
            'firstTeam' => 'Torino',
            'secondTeam' => 'Juve Caserta',
            'firstTeamPoints' => 88,
            'secondTeamPoints' => 95,
        ],
        [
            'firstTeam' => 'Bologna',
            'secondTeam' => 'Boooo',
            'firstTeamPoints' => 75,
            'secondTeamPoints' => 41,
        ],
        [
            'firstTeam' => 'New Basket Brindisi',
            'secondTeam' => 'Brescia',
            'firstTeamPoints' => 103,
            'secondTeamPoints' => 102,
        ],
    ];
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
    <h1>Risultati</h1>

    <?php for ($i=0; $i < count($matches); $i++) {
        $this_match = $matches[$i];    
    ?>
    <div>
        <span><?php echo $this_match['firstTeam']; ?> - <?php echo $this_match['secondTeam']; ?></span>
        <span>|</span>
        <span><?php echo $this_match['firstTeamPoints']; ?>-<?php echo $this_match['secondTeamPoints']; ?></span>
    </div>
    <?php } ?>

</body>
</html>