<?php

$servername = "localhost"; 
$username = "nswcailj_fish"; 
$password = "Kurama2411.";
$dbname = "nswcailj_alfaris"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   // die("Koneksi tidak berhasil: " .$conn->connect_error);
}
else {
  //  echo "Connected successfully";
}
?>