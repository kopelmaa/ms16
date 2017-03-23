<?php

require('function.php');

home();

$file_name = 'tekst.txt';

function file_write (){
    $file = fopen('tekst.txt',"a") or 
    die("ei saanud avada");
    $tekst = "esimene tekst sisestuseks\n";
    fwrite($file, $tekst);
    $tekst = "teine tekst sisestuseks\n";
    fwrite($file, $tekst);
    $tekst = "kolmas tekst sisestuseks\n";
    fwrite($file, $tekst);
    fclose($file);
    echo "Õnnestus!";
}

function file_read(){
    $file = fopen('tekst.txt',"w+") or die("ei saanud avada");
    $tekst = 1;
    fclose($file, $tekst);
    $count = file_get_contents('count.txt');
    echo $count;
    fclose($file);  
}
 

//file_write();

//file_read();

?>