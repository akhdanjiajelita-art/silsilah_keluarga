<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Keluarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #000000, #555555, #ffffff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .dashboard {
            text-align: center;
            color: #fff;
        }
        .dashboard h1 {
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
        }
        .dashboard p {
            margin-bottom: 50px;
            color: #ddd;
        }
        .card {
            border-radius: 20px;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.1);
            color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.4);
        }
        .icon {
            font-size: 60px;
        }
        .btn-custom {
            border-radius: 30px;
            font-weight: bold;
            padding: 10px 20px;
        }
        .btn-success {
            background: linear-gradient(45deg, #28a745, #5cd65c);
            border: none;
        }
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #66b3ff);
            border: none;
        }
        .btn-warning {
            background: linear-gradient(45deg, #ffcc00, #ffdb4d);
            border: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container dashboard">
        <h1>👨‍👩‍👧‍👦 Dashboard Keluarga</h1>
        <p>Kelola anggota keluarga dan relasi dengan mudah</p>

        <div class="row g-4 justify-content-center">
            <!-- Lihat Silsilah -->
            <div class="col-md-3">
                <div class="card p-4 shadow-sm">
                    <div class="icon">📜</div>
                    <h4 class="mt-3">Lihat Silsilah</h4>
                    <p>Tampilkan data relasi keluarga.</p>
                    <a href="lihat_silsilah.php" class="btn btn-success btn-custom">Lihat</a>
                </div>
            </div>

            <!-- Tambah Relasi -->
            <div class="col-md-3">
                <div class="card p-4 shadow-sm">
                    <div class="icon">🤝</div>
                    <h4 class="mt-3">Tambah Relasi</h4>
                    <p>Hubungkan anggota keluarga.</p>
                    <a href="relasi1.php" class="btn btn-primary btn-custom">Tambah</a>
                </div>
            </div>

            <!-- Tambah Anggota -->
            <div class="col-md-3">
                <div class="card p-4 shadow-sm">
                    <div class="icon">👤</div>
                    <h4 class="mt-3">Tambah Anggota</h4>
                    <p>Masukkan anggota keluarga baru.</p>
                    <a href="tambah_anggota.php" class="btn btn-warning btn-custom">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
