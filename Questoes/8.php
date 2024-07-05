<?php

    $palavra = readline("Informe uma Palavra para verifica se é um palíndromo: ");

    $palavra = strtolower(str_replace('', '', $palavra));


    if ($palavra === strrev($palavra)){
        print("A palavra $str é um palíndromo");
    }else{
        print("A palavra $str não é um palíndromo");
    }


?>