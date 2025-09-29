<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM relasi WHERE id = '$id'";
    $query = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Relasi berhasil dihapus!'); window.location='lihat_silsilah.php';</script>";
    }
}
?>
