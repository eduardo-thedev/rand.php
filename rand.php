<?php

//tamanho da string
$tamanho_string = 5;

//armazena a string aleatória
$string_aleatoria = "";

//adiciona números aleatórios na string
for ($i = 0; $i < $tamanho_string; $i++) {
    $string_aleatoria .= rand(0, 9);
}

//imprime a string aleatória
echo $string_aleatoria;
?> 
