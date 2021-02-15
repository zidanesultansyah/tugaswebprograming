<?php
$database_hostname = "localhost";
$database_username = "id16153437_bamboo";
$database_password ="e9L#y&m#rIm2?onv";
$database_name = "id16153437_bamboobetta";

try{
    //sintaks berhasil?  
    $database_connection= new PDO("mysql:host=$database_hostname;dbname=$database_name",
    $database_username, $database_password); 
    $cek = "Koneksi Berhasil";
   //  echo $cek;
   }catch(PDOException $x){
   die($x->getMessage());
   }
?>