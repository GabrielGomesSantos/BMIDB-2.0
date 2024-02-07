<?php
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $resultado = $peso / ($altura * $altura);

    echo "O BMI de $nome é: $resultado";

    if ($resultado < 18.5) {
        echo "Baixo peso";
    } elseif ($resultado >= 18.5 && $resultado < 25) {
        echo "Peso normal";
    } else {
        echo "Sobrepeso";
    }
?>