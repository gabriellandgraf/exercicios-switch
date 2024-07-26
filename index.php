<?php

/*Escreva um script PHP que use switch para 
exibir o nome do dia da semana com base em um 
número (1 para domingo, 2 para segunda-feira, etc.).*/

$dia=7;

switch ($dia) {
    case 1:
        echo "Domingo";
        break;

    case 2:
        echo "Segunda";
        break;

    case 3:
        echo "Terça";
        break;
    
    case 4:
        echo "Quarta";
        break;

    case 5:
        echo "Quinta";
        break;

    case 6:
        echo "Sexta";
        break;

    case 7:
        echo "Sabado";
        break;

    default:
        echo "Número inválido. Digite de 1 a 7";
        break;
}

/*Escreva um script PHP que use switch para classificar uma 
nota (A, B, C, D, E, F) e exiba a descrição correspondente */

$nota=5;

switch ($nota) {
    case 10:
        echo "A";
        break;

    case 9:
        echo "B";
        break;

    case 8:
        echo "C";
        break;
    
    case 7:
        echo "D";
        break;

    case 6:
        echo "F";
        break;

    default:
        echo "REPROVADO!!";
        break;
}

/*Escreva um script PHP que use switch para implementar uma calculadora 
simples que realiza operações de adição, subtração, multiplicação e divisão.*/

$numero1= 10;
$numero2= 15;
$result=1;

switch ($result) {
    case 1:
        echo $numero1+$numero2;
        break;
        
    case 2:
        echo $numero1-$numero2;
        break;

    case 3:
        echo $numero1*$numero2;
        break;

    case 4:
        echo $numero1/$numero2;
        break;

    default:
        echo "digite outro numero para o resultado!";
        break;
}

/*Escreva um script PHP que use switch para converter 
um número (1 a 12) no nome do mês correspondente.*/ 

$mes= 8;

switch ($mes) {
    case 1:
        echo "janeiro";
        break;

    case 2:
        echo "Fevereiro";
        break;

    case 3:
        echo "Março";
        break;

    case 4:
        echo "Abril";
        break;

    case 5:
        echo "Maio";
        break;

    case 6:
        echo "Junho";
        break;

    case 7:
        echo "Julho";
        break;

    case 8:
        echo "Agosto";
        break;

    case 9:
        echo "Setembro";
        break;

    case 10:
        echo "Outubro";
        break;

    case 11:
        echo "Novembro";
        break;

    case 12:
        echo "Dezembro";
        break;
}

?>