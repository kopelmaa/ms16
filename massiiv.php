<?php

require 'functions.php';
echo '<meta charset = "utf-8">';

home();

$daytime = "õhtu";

// näidismassiiv
$massiiv = array($daytime,11, "Hoplaa",3.14,"Oleme klassis nr A210");

// massiivi struktuur
print_r($massiiv);

//massiivi esimese elemendi
echo $massiiv[0]."<br>";

// massiivi sisu listina
foreach($massiiv as $element){
    echo $element."<br>";
}

// massiivi sisu listina, for tsükkel
for ($i = 0; $i < count($massiiv); $i++){
	echo $massiiv[$i]."<br>";
}

?>