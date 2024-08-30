<?php


    function velocidadeMaxima($vel) {

        if(is_int($vel)) {

        echo "O carro atinge a velocidade máxima de $vel km/h <br>";

        } else {
            echo " Por favor, passe um número inteiro <br>";
        }

    }

    velocidadeMaxima(200);
    velocidadeMaxima(100);
    velocidadeMaxima(90);
    velocidadeMaxima(250);
    velocidadeMaxima("teste");

    function descreverAnimal($nome, $raca) {

        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "Vira-lata");
    descreverAnimal("Levi", "Pincher");