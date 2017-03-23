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
$sql = "SELECT id, name, id_code FROM ms16.isik";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<b>ID:</b>" .$row["id"]." <b>NIMI:</b> ".$row["name"]." <b>JA ISIKUKOOD</b> ".$row["id_code"]."<br>";
    }
} else {
    echo "0 results";}
}

function my_insert($conn){
    $sql = "INSERT INTO ms16.isik (name, id_code) VALUES ('Kristina','49509210035')";
    $result = $conn->query($sql);
}

function my_delete($conn){
        $sql = "DELETE FROM ms16.isik where id = 2";
 $result = $conn->query($sql);
}

function my_close($conn){
$conn->close();}




// pärime andmebaasist andmeid (ühekaupa)

//lisame andmebaasi andmed

?>