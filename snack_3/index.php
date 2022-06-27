<?php
    $postsArr = [

            '01-01-2022' => [
                [
                    'index' => '1',
                    'author' => 'Master Yoda',
                    'text' => 'La capacità di parlare, intelligente non ti rende.'
                ],
                [
                    'index' => '2',
                    'author' => 'Master Yoda',
                    'text' => 'Le armi non vincono le battaglie. La tua mente, potente lei è.'
                ]
            ],

            '06-01-2022' => [
                [
                    'index' => '3',
                    'author' => 'Master Yoda',
                    'text' => 'Saprai distinguere il bene dal male quando sarai calmo, tranquillo. Passivo. Uno Jedi usa la Forza per la conoscenza e la difesa, mai per l’attacco.'
                ],
                [
                    'index' => '4',
                    'author' => 'Master Yoda',
                    'text' => 'Quando guardi il lato oscuro, attenzione devi fare… perché anche il lato oscuro ti guarda.'
                ],
                [
                    'index' => '5',
                    'author' => 'Master Yoda',
                    'text' => 'Ingannarvi gli occhi, possono. Nella Forza, molto diverso ognuno di voi è.'
                ]
            ],
            '010-01-2022' => [
                [
                    'index' => '6',
                    'author' => 'Master Yoda',
                    'text' => 'Oh…grande guerriero. Guerra non fa nessuno grande.'
                ]
            ],
    ];
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
        $date = array_keys($postsArr);
        
        for ($i=0; $i < count($postsArr) ; $i++) { 
            $posts = $postsArr[$date[$i]];
            echo "<div>{$date[$i]}</div>";

            for ($j=0; $j < count($posts) ; $j++) { 
                $post = $posts[$j];

                echo "<div>Post n.{$post['index']}</div>";
                echo "<div>{$post['author']}</div>";
                echo "<div>{$post['text']}</div>";
            }

        }
    ?>
</body>
</html>