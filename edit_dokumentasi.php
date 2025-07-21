<?php
$koneksi = new mysqli("localhost", "root", "", "pkl");

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan di URL.";
    exit;
}

$id = (int)$_GET['id'];
$sql = "SELECT * FROM dokumentasi WHERE kode = $id";
$data = $koneksi->query($sql)->fetch_assoc();

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dokumentasi - Portofolio PKL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .form-section {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-5 fw-bold">PORTOFOLIO PRAKTIK KERJA LAPANGAN</h1>
        <p class="lead">Edit Dokumentasi Kegiatan</p>
    </div>
</section>

<!-- Form Edit Dokumentasi -->
<section class="py-5">
    <div class="container">
        <div class="form-section shadow">
            <form action="proses_edit_dokumentasi.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['kode']; ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" value="<?= htmlspecialchars($data['nama_kegiatan']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required><?= htmlspecialchars($data['deskripsi']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ubah Foto (opsional)</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                <a href="index.php#dokumentasi" class="btn btn-outline-secondary">Batal</a>
            </form>
        </div>
    </div>
</section>

<!-- Profil Tim -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Profil Tim PKL</h2>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="img/diffa.jpg" class="rounded-circle mb-2" width="100">
                <h5>DIFFA SATRIA PRADITA</h5>
                <p>Ketua Tim</p>
            </div>
            <div class="col-md-3">
                <img src="gambar/martin.jpg" class="rounded-circle mb-2" width="100">
                <h5>MARTIN MAULANA</h5>
                <p>Anggota Tim</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-4 bg-dark text-white">
    <p>&copy; <?= date("Y"); ?> Portofolio PKL - Diffa dan Martin | Program Studi TKJ</p>
</footer>

</body>
</html>
