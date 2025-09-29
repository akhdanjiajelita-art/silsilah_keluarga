<?php
include "koneksi.php";
$anggota1 = mysqli_query($conn, "SELECT * FROM anggota");
$anggota2 = mysqli_query($conn, "SELECT * FROM anggota");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        select, button {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }
        select {
            background: #fff;
        }
        button {
            margin-top: 20px;
            border: none;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #007bff, #66b3ff);
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
        <h2>➕ Tambah Relasi Keluarga</h2>
        <form action="relasi2.php" method="post">
            <label>Anggota 1:</label>
            <select name="id_anggota" required>
                <?php while ($row = mysqli_fetch_assoc($anggota1)) { ?>
                    <option value="<?= $row['id']; ?>"><?= htmlspecialchars($row['nama']); ?></option>
                <?php } ?>
            </select>

            <label>Anggota 2:</label>
            <select name="id_relasi" required>
                <?php while ($row2 = mysqli_fetch_assoc($anggota2)) { ?>
                    <option value="<?= $row2['id']; ?>"><?= htmlspecialchars($row2['nama']); ?></option>
                <?php } ?>
            </select>

            <label>Tipe Relasi:</label>
            <select name="tipe_relasi" required>
                <option value="ayah">Ayah</option>
                <option value="ibu">Ibu</option>
                <option value="anak">Anak</option>
                <option value="pasangan">Pasangan</option>
            </select>

            <button type="submit" name="simpan">Simpan Relasi</button>
        </form>
        <div class="back">
            <a href="index.php">🏠 Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
