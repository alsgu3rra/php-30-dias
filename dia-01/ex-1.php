<?php
    $arrayCores = [
        'azul',
        'rosa',
        'verde',
        'amarelo',
        'preto',
        'branco'
    ];

    foreach ($arrayCores as $value ){

        if ($value == 'amarelo' && $value == 'verde' && $value == 'azul'){
            echo "A cor $value esta presente na bandeira do Brasil <br>";
            
            }else {
                echo "A cor que nao esta é: $value <br>";
        }
    }
?>
