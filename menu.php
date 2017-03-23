<?php

$user = "Gustav";

$menu_arr = array ('andmebaasid','massiivid','hint','file','koopia','methods','mysql');

$menu_begin= '<div>'.$user;

$menu_end= '<div>';


function menu($begin,$body,$end) {
    echo $begin;
    for ($i = 0; $i < count($body); $i++)
    {
        echo '<li> <a href="'.$body[$i].'.php">'.$body[$i].'</a></li>';
    }
    echo $end;  
}


?>