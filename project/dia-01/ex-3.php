<?php
    $candidatos = [];

    $candidato1 = [
        'nome' => 'MARIA',
        'sexo' => 'F',
        'idade' => 23,
        'exp' => 4,
        'escolaridade' => ['ensino medio', 'tecnico']
    ];

    $candidatos[] = $candidato1;

    $candidato2 = [
        'nome' => 'JOAO',
        'sexo' => 'M',
        'idade' => 30,
        'exp' => 1,
        'escolaridade' => ['ensino medio', 'faculdade', 'especializacao']
    ];

    $candidatos[] = $candidato2;

    $candidato3 = [
        'nome' => 'JOANA',
        'sexo' => 'F',
        'idade' => 27,
        'exp' => 8,
        'escolaridade' => ['ensino medio']
    ];

    $candidatos[] = $candidato3;

    $QTDcandidatos = count($candidatos);

    echo "Quantidade de candidatos: $QTDcandidatos<br>";

    echo "Candidatos mulheres:<br>";
    
    foreach ($candidatos as $candidato) {
        if ($candidato['sexo'] == 'F') {
            echo $candidato['nome'] . "<br>";
        }
    }

    $pontuacoes = [];

    foreach ($candidatos as $candidato) {
        $pontuacao = 0;

        foreach ($candidato['escolaridade'] as $nivel) {
            $pontuacao += array_search($nivel, $candidato['escolaridade']);
        }

        $pontuacao += $candidato['exp'] * 5;

        $pontuacoes[] = $pontuacao;
    }

    $maxPontuacao = max($pontuacoes);
    
    $vencedor = $candidatos[array_search($maxPontuacao, $pontuacoes)]['nome'];

    echo "O candidato vencedor é: $vencedor<br>";
?>
