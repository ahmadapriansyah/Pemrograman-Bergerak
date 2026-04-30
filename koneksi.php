<?php
$host = "sql208.infinityfree.com";
$user = "if0_41674075";
$pass = "twinkelstar0000"; 
$db   = "if0_41674075_database_ahmadapriansyah";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>