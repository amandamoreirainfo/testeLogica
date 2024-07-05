<?php

    $palavra = readline("Informe uma Palavra para verifica se é um palíndromo: ");

    $palavra = strtolower(str_replace('', '', $palavra));


    if ($palavra === strrev($palavra)){
        print("A palavra $palavra é um palíndromo");
    }else{
        print("A palavra $palavra não é um palíndromo");
    }


?>