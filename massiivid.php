<?php

require('function.php');

home();

$test = array('hommik',1,'tere',10.89,'Klass nr A210','1');


$var = 3;
//liikmete väljatrükk
print_r($test);
//muutuja sisu vaatamine
var_dump($test);
var_dump($var);
//massiivi eraldi liikmete kuvamine
foreach ($test as $t) {
    echo "$t <br>";
}

$sum = $test[2]." ".$test[0]."ust<br>";

echo $sum;

$sum = $test[0]."ust ".$test[2]."<br>";

echo $sum;


//stringi tegemine massiiviks
$var = "esimene, teine, kolmas, neljas";

echo $var."<br>";
print_r(explode(" ",$var));
    
//massiivi muutmine stringiks
    
$var_arr = array('Esimene', 'Teine', 'Kolmas', 'Neljas');

echo implode(";",$var_arr)."<br>";

//massiivi lisamine
$var_arr_add = $var_arr;

array_push($var_arr_add,"viies","kuues");

print_r($var_arr_add);
echo "<br>";
//massiivist kustutamine

$var_arr_decrease = $var_arr;

array_pop($var_arr_decrease);
print_r($var_arr_decrease);
echo "<br>";
//sidumismassiivid (associated array)


$var_assoc = array('Inga' => 'Esimene', 'Madis' => 'Teine', 'Martin' => 'Kolmas');

//massiivi võtmed
print_r(array_keys($var_assoc));
echo "<br>";
//massiivi väärtused

print_r(array_values($var_assoc));
echo "<br>";
//massiivi liikme väljatrükk

echo $var_assoc['Inga']."<br>";

//mitmemõõteline massiiv

$esta = "eesti keel";
$mata = "matemaatika";
$kem = "keemia";

$aine = "eesti keel";

$hinded = array("Peeter" => array("$esta" => 4, "$mata" => 3, "$kem" => 5),
               "Mari" => array("$esta" => 5, "$mata" => 4, "$kem" => 3),
                "Juhan" => array("$esta" => 4, "$mata" => 5, "$kem" => 3)
               );

echo "Pedro hinne $mata on: ";
echo $hinded['Peeter']['matemaatika']."<br>";

//mitmemõõteline massiiv väljatrükk

$hinded_id = array_keys($hinded);
for ($i=0; $i<count($hinded); $i++){
    echo $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne){ echo $aine." : " .$hinne."<br>";}
    echo "<br>";
}


$number[0]= 1;
$number[1]= 2;

define('A',"a");
define('B',"b");

$char[A] = "a";
$char[B] = "b";

var_dump($number);
var_dump($char);

?>