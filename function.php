<?php


function home() {
echo '<meta charset = "UTF-8">';
echo '<li> <a href="index.php">Tagasi koju</a></li>';
}

function greeting($input = "ebamäärast"){
            
    echo "Tere $input<br>";}

function counter(){
    $file_name = "count.txt";
    if (!(file_exists($file_name))) {
        $file = fopen('count.txt', "w+") or die("ei saanud avada");
    $tekst = 1;
    fwrite($file,$tekst);
    $count = file_get_contents('count.txt');
    echo $count;
    fclose($file);}
else{
    $file = fopen('count.txt',"r+") or die("ei saanud avada");
    $count = file_get_contents('count.txt')+1;
    fwrite($file, $count);
    echo $count;
    fclose($file);
    echo "<br>";    
    }
    }

// külastaja ip

function getUserIP()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $time = date("H:i:s");
    $visitor = $ip." ".$time."\n";
    $file = fopen('visitor.txt',"a+") or die("ei saanud avada");
    fwrite($file, $visitor);
        echo "Külastate seda lehte aadressilt".$ip;
        fclose($file);
    return $ip;
    
}

?>