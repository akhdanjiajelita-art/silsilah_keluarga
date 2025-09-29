<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO anggota (nama, tanggal_lahir, jenis_kelamin) 
            VALUES ('$nama', '$tgl_lahir', '$jk')";
    $query = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Anggota berhasil ditambahkan!'); window.location='lihat_silsilah.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota Keluarga</title>
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
        }
        .card {
            width: 500px;
            background: rgba(255,255,255,0.95);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #444;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }
        input, select {
            background: #fff;
        }
        button {
            margin-top: 20px;
            border: none;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #ff9900, #ffcc66);
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            opacity: 0.85;
        }
        .back {
            display: block;
            margin-top: 15px;
            text-align: center;
        }
        .back a {
            text-decoration: none;
            color: white;
            background: linear-gradient(45deg, #28a745, #5cd65c);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
            transition: 0.3s;
        }
        .back a:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>👤 Tambah Anggota Keluarga</h2>
        <form method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir">

            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <button type="submit" name="simpan">Simpan Anggota</button>
        </form>
        <div class="back">
            <a href="index.php">🏠 Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
