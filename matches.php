<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $matches = [
        [
            'Team1' => 'Chiesanova',
            'Team2' => 'Citanò',
            'Point_Team_1' => '70',
            'Point_Team_2' => '134'
        ],
        [
            'Team1' => 'Granducato di Treia',
            'Team2' => 'San Sivirì',
            'Point_Team_1' => '34',
            'Poit_Team_2' => '20'
        ],
        [
            'Team1' => 'Passo Treia',
            'Team2' => 'Camporota',
            'Point_Team_1' => '42',
            'Point_Team_2' => '165'
        ],
        [
            'Team1' => 'Cingoli',
            'Team2' => 'Grottaccia',
            'Point_Team_1' => '95',
            'Point_Team_2' => '125'
        ],
    ]
    ?>
    <h1>Php Snacks</h1>
    <h2>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.</h2>

    <?php for ($i = 0; $i < count($matches); $i++) { ?>
        <h4>
            <?php
            echo $i;
            ?>
        </h4>
    <?php
    }
    ?>
</body>

</html>