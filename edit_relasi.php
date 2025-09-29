<?php
include "koneksi.php";

// Ambil data relasi yang mau diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM relasi WHERE id='$id'");
    $data = mysqli_fetch_assoc($result);
}

// Ambil daftar anggota untuk dropdown
$anggota = mysqli_query($conn, "SELECT id, nama FROM anggota");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $id_anggota = $_POST['id_anggota'];
    $id_relasi = $_POST['id_relasi'];
    $tipe_relasi = $_POST['tipe_relasi'];

    $sql = "UPDATE relasi 
            SET id_anggota='$id_anggota', id_relasi='$id_relasi', tipe_relasi='$tipe_relasi' 
            WHERE id='$id'";
    $query = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Relasi berhasil diupdate!'); window.location='lihat_silsilah.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Relasi</title>
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
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-top: 12px;
            display: block;
        }
        select, button {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }
        button {
            margin-top: 20px;
            border: none;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #007bff, #66b3ff);
            cursor: pointer;
        }
        button:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>📝 Edit Relasi</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <label>Anggota 1:</label>
            <select name="id_anggota" required>
                <?php mysqli_data_seek($anggota, 0); while ($a = mysqli_fetch_assoc($anggota)) { ?>
                    <option value="<?= $a['id']; ?>" <?= $a['id']==$data['id_anggota']?"selected":""; ?>>
                        <?= $a['nama']; ?>
                    </option>
                <?php } ?>
            </select>

            <label>Anggota 2:</label>
            <select name="id_relasi" required>
                <?php mysqli_data_seek($anggota, 0); while ($a = mysqli_fetch_assoc($anggota)) { ?>
                    <option value="<?= $a['id']; ?>" <?= $a['id']==$data['id_relasi']?"selected":""; ?>>
                        <?= $a['nama']; ?>
                    </option>
                <?php } ?>
            </select>

            <label>Tipe Relasi:</label>
            <select name="tipe_relasi" required>
                <option value="ayah" <?= $data['tipe_relasi']=="ayah"?"selected":""; ?>>Ayah</option>
                <option value="ibu" <?= $data['tipe_relasi']=="ibu"?"selected":""; ?>>Ibu</option>
                <option value="anak" <?= $data['tipe_relasi']=="anak"?"selected":""; ?>>Anak</option>
                <option value="pasangan" <?= $data['tipe_relasi']=="pasangan"?"selected":""; ?>>Pasangan</option>
            </select>

            <button type="submit" name="update">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
