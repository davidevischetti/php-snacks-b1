<!-- DATI PHP -->
<?php 
$gamesArr = [
    [
        [
            'team' => 'Los Angeles Lakers',
            'score' => '91',
            'home' => true
        ],
        [
            'team' => 'Golden State Warriors',
            'score' => '78',
            'home' => false
        ]
        ],
    [
        [
            'team' => 'New York Knicks',
            'score' => '82',
            'home' => true
        ],
        [
            'team' => 'Toronto Raptors',
            'score' => '85',
            'home' => false
        ]
        ],
    [
        [
            'team' => 'Chicago Bulls',
            'score' => '75',
            'home' => true
        ],
        [
            'team' => 'Miami Heat',
            'score' => '65',
            'home' => false
        ]
        ],
    [
        [
            'team' => 'Los Angeles Lakers',
            'score' => '91',
            'home' => true
        ],
        [
            'team' => 'Golden State Warriors',
            'score' => '78',
            'home' => false
        ]
        ],
    [
        [
            'team' => 'Detroit Pistons',
            'score' => '61',
            'home' => true
        ],
        [
            'team' => 'Boston Celtics',
            'score' => '87',
            'home' => false
        ]
        ]
]
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
        $gamesArr_length = count($gamesArr);
        for ($i=0; $i < $gamesArr_length ; $i++) { 
            $teams = $gamesArr[$i];
            echo "<div> {$teams[0]['team']} - {$teams[1]['team']} | {$teams[0]['score']} - {$teams[1]['score']} </div>";
        }
    ?>
</body>
</html>

