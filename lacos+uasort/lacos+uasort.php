<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    $dados =[
    [
    'id' => 1,
    'nome' => 'Zeca',
    'idade' => 42
    ],
    [
    'id' => 2,
    'nome' => 'Maria',
    'idade' => 65
    ],
    [
    'id' => 3,
    'nome' => 'Lucas',
    'idade' => 9
    ],
    ]
;

    echo "[for]: ";
    for($a=0; $a<count($dados); $a++) {
    print_r ($dados[$a]);
    }
    
    echo "<br> <hr> [foreach]: <br> <br> ";
    foreach ($dados as $chave => $valor) {
        foreach ($valor as $Nchave => $Nvalor) {
            echo $Nchave;
            echo "<pre>";
                print_r($Nvalor);
            echo "</pre>";
        }
}
    ?>
    
<?php
        $array = [
            [
            'id' => 1,
            'nome' => 'Zeca',
            'idade' => 42
            ],
            ['id' => 2,
            'nome' => 'Jao',
            'idade' => 32
            ],
            ['id' => 3,
            'nome' => 'Mareia',
            'idade' => 18
            ],
            ['id'=> 4,
            'nome' =>'Cananda',
            'idade' => 17
            ]
        ];
        echo " <hr>";
        echo "Uso do uasort: ";

    echo '<pre>';
    echo "Antes: <br> <br> ";
        print_r($array);
    echo '</pre>';

    uasort($array, function ($a, $b) {
        if ($a['nome'] == $b['nome']) return 0;

        return ($a['nome'] < $b['nome'] ? -1 : 1);

    });

    echo '<pre>';
    echo "Depois: <br> <br> ";
        print_r($array);
    echo '</pre>';
?>


</body>
</html>