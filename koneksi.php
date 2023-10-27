<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "kasir_tutor";

$dbconnect = new mysqli ("$host", "$user", "$pass", "$db");

if($dbconnect-> connect_error)
{
    echo "koneksi gagal ->" .$dbconnect->connect_error;
}
?>