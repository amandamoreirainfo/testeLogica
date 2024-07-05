<?php

    $numero = (int) readline("Informe um Número: ");
    $fatorial = 1;


    for($i = 1; $i <= $numero; $i++){

        $fatorial *= $i;

    }

    print("O fatorial do $numero é $fatorial");

?>