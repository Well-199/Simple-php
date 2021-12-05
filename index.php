<?php
$nome = 'Wellington'; //String
$idade = 39; // Inteiro
$dormindo = false; // Boolean
$vazia = null; // Sem valor atribuido

$dormindo = $dormindo == true ? 'dormindo' : 'acordado';

echo 'O '.$nome.' Tem '.$idade.' e esta '.$dormindo;

echo '<br><br>';

$vazia = $vazia == null ? 'esta vazia' : 'não esta vazia';

echo 'Esta variavel '.$vazia;