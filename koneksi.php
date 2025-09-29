<?php
$host = "sql313.infinityfree.com";
$user = "if0_39914601";
$pass = "P9B1jGZPNimbS7";
$db   = "if0_39914601_XXX";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
