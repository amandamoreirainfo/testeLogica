<?php

    function primo($n){

        $divisores = 0;

        for($i = 1; $i <= $n; $i++){

            if($n % $i == 0){

                $divisores++;
            }
        }

        if ($divisores == 2){

            return true;

        }else{
            
            return false;
        }
    }


    for($i = 1; $i <= 100; $i++){

        if(primo($i)){

            print($i . " ");

        }
    }


    print("\n");


?>