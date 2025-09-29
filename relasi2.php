<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $id_anggota = $_POST['id_anggota'];
    $id_relasi  = $_POST['id_relasi'];
    $tipe_relasi = $_POST['tipe_relasi'];

    $sql = "INSERT INTO relasi (id_anggota, id_relasi, tipe_relasi) 
            VALUES ('$id_anggota', '$id_relasi', '$tipe_relasi')";
    $query = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Relasi berhasil ditambahkan!'); window.location='lihat_silsilah.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Relasi</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #000000, #555555, #ffffff);
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .message {
            background: rgba(0,0,0,0.7);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.4);
            text-align: center;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 20px;
            background: linear-gradient(45deg, #28a745, #5cd65c);
            color: white;
            transition: 0.3s;
        }
        a:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>
    <div class="message">
        <h2>✅ Relasi berhasil ditambahkan!</h2>
        <a href="relasi1.php">➕ Tambah Relasi Lagi</a>
        <a href="lihat_silsilah.php">📜 Lihat Silsilah</a>
        <a href="index.php">🏠 Dashboard</a>
    </div>
</body>
</html>
