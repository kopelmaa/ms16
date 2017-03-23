 <!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
  
<script>
    
    document.write("Tere neljapäevast<br>");
    window.onload = function () {
        var date = new Date();
        var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
        document.getElementsByTagName('div')[0].innerHTML = "Kell JS"+time;
        window.setTimeout(arguments.callee,1000);
    }
    
</script>
    
    
    <?php
echo "<div></div>";
//require_once('mysql.php');
   
require('function.php');
    
require('menu.php');
    

     greeting("hommikust");
    /*
    connect($conn);
    my_query($conn);
    my_close($conn);
    */
    menu($menu_begin,$menu_arr,$menu_end);
    
    
/*    
$world = "Maailm";
$greeting = "Tere";

$age = 5;
$name = "Nipitiri";
$diff = 5;
$result = $diff + $age;
$workdays = array("esmaspäev","teisipäev","kolmapäev","neljapäev","reede");
    
$people = array(
    "esimene" => "Peeter",
    "teine" => "Toivo",
    "kolmas" => "Ants");

echo "<b>$greeting</b>".'<i>$world</i><br>';
echo "$name on $age aastat vana.<br>";
echo "$name on $diff aasta pärast $result aastat vana.<br>";

for($i=0; $i < count($workdays); $i++){
echo $workdays[$i]."<br>";
}

foreach($people as $que => $name){
    echo "<b>".$que."</b> kohal on ".$name."<br>";
}
    
date_default_timezone_set("Europe/Tallinn");    
$time = date("H:i")."<br>";
echo $time;
if ($time > 13){
    echo "Kobi koju";
} else {
    echo "Oota veel";
}
 */   
    
/*
phpinfo();
*/
counter();
getUserIP();
?>
    
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">