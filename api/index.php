<?php

$csv = array_map('str_getcsv', file(__DIR__.'/../data/dati.csv'));

echo '<pre>';
var_dump($csv);
echo '</pre>';

$csv=array_map("str_getcsv", file(__DIR__.'/../data/prova.csv'));

echo '<pre>';
var_dump($csv); //stampa contenuto
echo '</pre>';