
<?php
// commento
$csv = array_map('str_getcsv', file(__DIR__.'/../data/dati.csv'));

echo '<pre>';
var_dump($csv);
echo '</pre>';

$csv=array_map("str_getcsv", file(__DIR__.'/../data/prova.csv'));

print '<pre>';
var_dump($csv); //stampa contenuto
print '</pre>';