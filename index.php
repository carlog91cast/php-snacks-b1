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

    if ((strlen($name) > 3) && (strpos($mail, '@') > 0 && strpos($mail, '.') > 3) && (is_numeric($age))) {
        echo "accesso riuscito";
    } else {
        echo "accesso negato";
    }
    ?>

    <h1>Php Snacks 3</h1>
    <h2>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta </h2>

    <?php
    $numbers = [];

    while (count($numbers) < 15) {
        $number = rand(1, 50);

        if (!in_array($number, $numbers)) {
            $numbers[] = $number;
        }
    }

    var_dump($numbers);
    ?>

    <h1>Php Snacks 4</h1>
    <h2>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
        Ogni punto un nuovo paragrafo. </h2>

    <?php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan in nisl nisi scelerisque eu ultrices vitae. Nunc consequat interdum varius sit amet. Facilisis gravida neque convallis a. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Ornare suspendisse sed nisi lacus. Nisl nunc mi ipsum faucibus vitae. Malesuada fames ac turpis egestas integer eget. Neque volutpat ac tincidunt vitae semper quis lectus nulla at. Cursus mattis molestie a iaculis at erat pellentesque. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Proin sagittis nisl rhoncus mattis rhoncus urna. Pretium nibh ipsum consequat nisl vel pretium. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Porta nibh venenatis cras sed. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Ac ut consequat semper viverra nam libero. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum.";

    $splittedParagraph = explode(".", $paragraph);
    ?>

    <?php for ($i = 0; $i < count($splittedParagraph); $i++) { ?>
        <p>
            <?php
            echo $splittedParagraph[$i];
            ?>
        </p>
    <?php } ?>

    <h1>Php Snacks 4</h1>
    <h2>Creare un array contenente qualche alunno di un'ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno. </h2>

    <?php
    $students = [
        [
            'name' => 'Beppe',
            'last name' => 'Fetish',
            'votes' => [
                'matematica' => '2',
                'storia' => '4',
                'italiano' => '8',
                'filosofia' => '6',
                'latino' => '2',
                'educazione fisica' => '9'
            ]
        ],
        [
            'name' => 'Giuseppe',
            'last name' => 'Simone',
            'votes' => [
                'matematica' => '3',
                'storia' => '6',
                'italiano' => '4',
                'filosofia' => '7',
                'latino' => '2',
                'educazione fisica' => '0'
            ]
        ],
        [
            'name' => 'Tonio',
            'last name' => 'Cartonio',
            'votes' => [
                'matematica' => '9',
                'storia' => '9',
                'italiano' => '10',
                'filosofia' => '5',
                'latino' => '1',
                'educazione fisica' => '8'
            ]
        ],
        [
            'name' => 'Lupo',
            'last name' => 'Lucio',
            'votes' => [
                'matematica' => '2',
                'storia' => '1',
                'italiano' => '5',
                'filosofia' => '2',
                'latino' => '4',
                'educazione fisica' => '0'
            ]
        ],
        [
            'name' => 'Emma',
            'last name' => 'Bonino',
            'votes' => [
                'matematica' => '9',
                'storia' => '8',
                'italiano' => '5',
                'filosofia' => '9',
                'latino' => '4',
                'educazione fisica' => '0'
            ]
        ]
    ];
    var_dump($students);

    ?>
    <h1>Studenti</h1>
    <ul>
        <?php
            for ($i=0; $i <count($students) ; $i++) { 
            $subjects = $students[$i]['votes'];
            $votes = count($students[$i]['votes']);
        ?>
         <li>
            <?php
                echo
            ?>
         </li>
         <?php 
            }
         ?>
    </ul>


</body>

</html>