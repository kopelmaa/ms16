<?php

$server = "localhost";
$user = "root";
$pass = "";

// loome ühenduse

$conn = new mysqli($server, $user, $pass);
function connect($conn){
    
//kontrollime ühenduse olemasolu
if (!$conn) {
    
    die("Ühendust pole ".msqli_connect_error());
} echo "Jaii! Kontakteerusin <br><br>";
    }
    

// pärime andmebaasist andmeid (kõik korraga)

function my_query($conn){
$sql = "SELECT ID, Nimi, Perenimi, Isikukood, Aeg FROM ms16.Inimesed";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<b>ID:</b>" .$row["ID"]." <b>Nimi:</b> ".$row["Nimi"]." <b>Perenimi:</b>".$row["Perenimi"]."<b> Isikukood </b> ".$row["Isikukood"]." ja sisestusaeg:" .$row["Aeg"].
        "<br>";
    }
} else {
    echo "0 results";}
}

function my_insert($conn){
    $sql = "INSERT INTO ms16.inimesed (Nimi, Perenimi, Isikukood) VALUES ('Kristina', 'Jaanalind', '49509210035')";
    $result = $conn->query($sql);
}

function my_delete($conn){
        $sql = "DELETE FROM ms16.inimesed where Nimi = 'Kristina'";
 $result = $conn->query($sql);
}

function my_close($conn){
$conn->close();}

function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki'>";
    if(isset($_POST['show'])){
        my_query($conn);
    } else {echo "ei õnnestunud";}
}

function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa kirje'>";
    if(isset($_POST['add'])){
        my_insert($conn);
    }    else {echo "ei õnnestunud";}
    }


function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>";
    if(isset($_POST['delete'])){
        my_delete($conn);
     }  else {echo "ei õnnestunud";}
    }

// print_r($_POST);
// show_button($conn);





//my_query($conn);
//my_insert($conn);
//my_delete($conn);
// pärime andmebaasist andmeid (ühekaupa)

//lisame andmebaasi andmed

?>

<!doctypt html>
<html>
    <body>
        <form action='' method='post'>
        <ul>
          <li> <?php show_button($conn); ?>  </li>
       <li>    <?php add_button($conn); ?> </li>
        <li>   <?php delete_button($conn); ?> </li>
         </ul>   
        </form>
    </body>
</html>