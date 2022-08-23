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
            'Point_Team_2' => '20'
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
            echo $matches[$i]['Team1'] . ' - ' . $matches[$i]['Team2'] . ' | ' . $matches[$i]['Point_Team_1'] . ' - ' . $matches[$i]['Point_Team_2'];
            ?>
        </h4>
    <?php
    }
    ?>

    <h1>Php Snacks 2</h1>
    <h2>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</h2>

    <form action="index.php" method="GET">
        <input type="text" name="name" placeholder="name">
        <input type="email" name="mail" placeholder="email">
        <input type="text" name="age" placeholder="age">
        <button type="submit">submit</button>
    </form>

    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if ((strlen($name) > 3) && (strpos($mail, '@') > 0 && strpos($mail, '.') > 3) && (is_numeric($age))){
            echo "accesso riuscito";
        } else {
            echo "accesso negato";
        }
    ?>
</body>

</html>