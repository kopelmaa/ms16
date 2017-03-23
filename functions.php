<?php


function aeg(){
date_default_timezone_set("Europe/Tallinn");
$time = date("H:i:s");
echo $time."<br>";
if ($time > 18){
    echo "Aeg on koju minna";
} else {
    echo "Kell on:".$time." Peab veel kannatama";
}
}


function home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>';
}

?> 