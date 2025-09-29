<?php
include "koneksi.php";

$sql = "SELECT r.id, a.nama AS anggota1, b.nama AS anggota2, r.tipe_relasi
        FROM relasi r
        JOIN anggota a ON r.id_anggota = a.id
        JOIN anggota b ON r.id_relasi = b.id";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lihat Silsilah</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #000000, #555555, #ffffff);
            margin: 0;
            padding: 40px;
            min-height: 100vh;
        }
        h2 {
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
        }
        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background: rgba(255,255,255,0.95);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
        }
        th {
            background: linear-gradient(45deg, #4CAF50, #6fdc6f);
            color: white;
            padding: 14px;
            text-transform: uppercase;
        }
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #333;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .delete {
            color: red;
            text-decoration: none;
            font-size: 18px;
            margin: 0 5px;
        }
        .edit {
            color: #007bff;
            text-decoration: none;
            font-size: 18px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <h2>👨‍👩‍👧‍👦 Data Relasi Keluarga</h2>
    <table>
        <tr>
            <th>Anggota 1</th>
            <th>Tipe Relasi</th>
            <th>Anggota 2</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= htmlspecialchars($row['anggota1']); ?></td>
            <td><?= ucfirst(htmlspecialchars($row['tipe_relasi'])); ?></td>
            <td><?= htmlspecialchars($row['anggota2']); ?></td>
            <td>
                <a class="edit" href="edit_relasi.php?id=<?= $row['id']; ?>">📝</a>
                <a class="delete" href="hapus_relasi.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus relasi ini?');">🗑️</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
