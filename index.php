<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio PKL - Tim Diffa dan Martin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        section h2 {
            font-weight: 700;
            color: #04275b;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        .object-fit-cover {
            object-fit: cover;
        }
    </style>
</head>
<body>

<section class="bg-dark text-white text-center py-5">
  <div class="container">
    <img src="https://4.bp.blogspot.com/-f6b9RkCjQpo/W8VNtRd3E_I/AAAAAAAAAp8/cXhPu5Ai5PMTfpIgX2lN6wHCkh94y9iSwCEwYBhgL/s1600/LOGO%2BKEMENTERIAN%2BPERHUBUNGAN.png" class="rounded mb-4" alt="Foto Tim" width="150">
    <img src="https://universitasmandiri.ac.id/sp/assets1/img/logoico.png" class="rounded mb-4" alt="Foto Tim" width="200">
    
    <h1 class="display-5 fw-bold">PORTOFOLIO PRAKTIK KERJA LAPANGAN</h1>
    <p class="lead">Mahasiswa Program Studi Teknik Komputer dan Jaringan dari Universitas Mandiri Subang sedang melaksanakan PKL di Kantor Kesyahbandaran dan Otoritas Pelabuhan Kelas II Patimban.</p>
    <a href="#dokumentasi" class="btn btn-light mt-3">Dokumentasi Kegiatan</a>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">Tentang Kami</h2>
    <div class="row justify-content-center">
        <?php
        $anggota = [
            ["img" => "img/diffa.jpg", "nama" => "DINI ASRIYANTI", "peran" => "Pembimbing Lapangan"],
            ["img" => "img/diffa.jpg", "nama" => "DIFFA SATRIA PRADITA", "peran" => "Ketua Tim"],
            ["img" => "gambar/martin.jpg", "nama" => "MARTIN MAULANA", "peran" => "Anggota Tim"],
        ];
        foreach ($anggota as $a) {
            echo '
            <div class="col-md-3">
                <img src="'.$a['img'].'" class="rounded-circle mb-2" width="120">
                <h5>'.$a['nama'].'</h5>
                <p>'.$a['peran'].'</p>
            </div>';
        }
        ?>
    </div>
    <p>Kami Mahasiswa Prodi TKJ Semester 6 di Universitas Mandiri Subang yang sedang belajar dan mengembangkan kemampuan teknis melalui praktik kerja lapangan di Kantor Kesyahbandaran dan Otoritas Pelabuhan Kelas II Patimban.</p>
    <button class="btn btn-outline-dark mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#deskripsiTim">
        Tampilkan Lebih Lanjut
    </button>
    <div class="collapse mt-3" id="deskripsiTim">
        <h2 class="mb-4">Tentang Kampus Universitas Mandiri</h2>
        <img src="https://universitasmandiri.ac.id/sp/assets1/img/logoico.png" class="rounded-circle mb-2" width="120">
        <p>Kampus Universitas Mandiri Subang</p>
        <p>Universitas Mandiri Subang adalah kampus swasta hasil merger beberapa sekolah tinggi lokal</p>
        
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Profil Instansi Tempat PKL</h2>
    <div class="row align-items-center">
      <div class="col-md-4 text-center">
        <img src="https://4.bp.blogspot.com/-f6b9RkCjQpo/W8VNtRd3E_I/AAAAAAAAAp8/cXhPu5Ai5PMTfpIgX2lN6wHCkh94y9iSwCEwYBhgL/s1600/LOGO%2BKEMENTERIAN%2BPERHUBUNGAN.png" alt="Logo Instansi" width="120">
      </div>
      <div class="col-md-8">
        <p>Kesyahbandaran dan Otoritas Pelabuhan Patimban Kelas II adalah instansi pemerintah yang bertugas mengatur, mengawasi, dan mengendalikan kegiatan di Pelabuhan Patimban.</p>
        <button class="btn btn-outline-dark mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#deskripsiprofil">
            Tampilkan Profil Instansi
        </button>
        <div class="collapse mt-3" id="deskripsiprofil">
          <h2 class="text-right mb-4">Struktur Organisasi</h2>
          <ul>
            <li>Kepala Kantor KSOP Patimban</li>
            <li>Sub‑Bagian Tata Usaha</li>
            <li>Seksi Lalu Lintas dan Angkutan Laut serta Usaha Kepelabuhanan</li>
            <li>Seksi Status Hukum dan Sertifikasi Kapal</li>
            <li>Seksi Keselamatan Berlayar, Penjagaan dan Patroli</li>
          </ul>
          <h2 class="text-right mb-4">Tugas</h2>
          <p>Kantor Kesyahbandaran dan Otoritas Pelabuhan mempunyai tugas melaksanakan pengawasan, dan penegakan hukum dibidang keselamatan dan keamanan pelayaran, koordinasi kegiatan pemerintahan di pelabuhan serta pengaturan, pengendalian dan pengawasan kegiatan kepelabuhanan pada pelabuhan yang diusahakan secara komersial.</p>
          <h2 class="text-right mb-4">Fungsi</h2>
          <ul>
            <li>pelaksanaan pengawasan dan pemenuhan kelaiklautan kapal, sertiflkasi keselamatan kapal, pencegahan pencemaran dari kapal dan penetapan status hukum kapal.</li>
            <li>pelaksanaan pemeriksaan manajemen keselamatan kapal.</li>
            <li>pelaksanaan pengawasan keselamatan dan keamanan pelayaran terkait dengan kegiatan bongkar muat barang berbahaya, barang khusus, limbah bahan berbahaya dan beracun (B3), pengisian bahan bakar, ketertiban embarkasi dan debarkasi penumpang, pembangunan fasillitas pelabuhan, pengerukan dan reklamasi, laiklayar dan kepelautan, tertib lalu lintas kapal di perairan pelabuhan dan alur pelayaran, pemanduan dan penundaan kapal, serta penerbitan Surat Persetujuan Berlayar.</li>
            <li>pelaksanaan pemeriksaan kecelakaan kapal, pencegahan dan pemadaman kebakaran di perairan pelabuhan,penanganan musibah di laut, pelaksanaan perlindungan lingkungan maritim dan penegakan hukum di bidang keselamatan dan keamanan pelayaran</li>
            <li>pelaksanaan koordinasi kegiatan pemerintahan di pelabuhan yang terkait dengan pelaksanaan pengawasan dan penegakan hukum di bidang keselamatan dan keamanan pelayaran.</li>
            <li>pelaksanaan penyusunan Rencana Induk Pelabuhan, Daerah Lingkungan Kerja dan Daerah Lingkungan Kepentingan pelabuhan, serta pengawasan penggunaannya, pengusulan tarif untuk ditetapkan Menteri.</li>
            <li>pelaksanaan penyediaan, pengaturan, dan pengawasan penggunaan lahan daratan dan perairan pelabuhan, pemeliharaan penahan gelombang, kolam pelabuhan, alur pelayaran dan jaringan jalan serta Sarana Bantu Navigasi Pelayaran.</li>
            <li>pelaksanaan penjaminan dan pemeliharaan kelestarian lingkungan di pelabuhan, keamanan dan ketertiban, kelancaran arus barang di pelabuhan.</li>
            <li>pelaksanaan pengaturan lalu lintas kapal ke luar masuk pelabuhan melalui pemanduan kapal, penyediaan jasa atau pelayanan jasa kepelabuhanan serta pemberian konsesi atau bentuk lainnya kepada Badan Usaha Pelabuhan.</li>
            <li>penyiapan bahan penetapan dan evaluasi standar kinerja operasional pelayanan jasa kepelabuhanan.</li>
            <li>pelaksanaan urusan keuangan, kepegawaian dan umum, hukum dan hubungan masyarakat serta pelaporan.</li>
          </ul>
          <h2>Alamat</h2>
          <p>Jalan Raya Pelabuhan Patimban, Subang Jawa Barat 41259.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="dokumentasi" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Dokumentasi Kegiatan</h2>
    <form method="get" class="mb-4 text-end">
    <label for="urut" class="me-2">Urutkan berdasarkan:</label>
    <select name="urut" id="urut" onchange="this.form.submit()" class="form-select w-auto d-inline">
      <option value="desc" <?= (isset($_GET['urut']) && $_GET['urut'] == 'desc') ? 'selected' : '' ?>>Terbaru ke Lama</option>
      <option value="asc" <?= (isset($_GET['urut']) && $_GET['urut'] == 'asc') ? 'selected' : '' ?>>Lama ke Terbaru</option>
    </select>
</form>

    <div class="row g-4">
      <?php
      $koneksi = new mysqli("localhost", "root", "", "pkl");
      // Mengurutkan dokumentasi berdasarkan tanggal secara DESC (terbaru ke terlama)
      $urut = isset($_GET['urut']) && $_GET['urut'] === 'asc' ? 'ASC' : 'DESC';
      $sql = "SELECT * FROM dokumentasi ORDER BY tanggal $urut";
      $hasil = $koneksi->query($sql);
      
      if ($hasil->num_rows > 0) {
          while ($row = $hasil->fetch_assoc()) {
              echo '<div class="col-md-4">';
              echo '   <div class="card h-100 shadow">';
              echo '     <img src="data:image/jpeg;base64,' . base64_encode($row["foto"]) . '" class="card-img-top img-fluid object-fit-cover" alt="Foto Kegiatan" style="height: 250px;">';
              echo '     <div class="card-body">';
              echo '       <h5 class="card-title">'.htmlspecialchars($row["nama_kegiatan"]).'</h5>';
              echo '       <p class="card-text">'.htmlspecialchars($row["deskripsi"]).'</p>';
              echo '     </div>';
              echo '     <div class="card-footer d-flex justify-content-between align-items-center">';
              echo '       <small class="text-muted">Tanggal: '.htmlspecialchars($row["tanggal"]).'</small>';
              echo '     </div>';
              echo '     <div class="card-footer d-flex justify-content-between">';
              echo '       <a href="edit_dokumentasi.php?id=' . $row['kode'] . '" class="btn btn-outline-warning btn-sm">Edit</a>';
              echo '       <a href="hapus_dokumentasi.php?id=' . $row['kode'] . '" class="btn btn-outline-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Hapus</a>';
              echo '     </div>';
              echo '   </div>';
              echo '</div>';
          }
      } else {
          echo "<p class='text-center'>Belum ada dokumentasi kegiatan.</p>";
      }
      // Pastikan untuk menutup koneksi database setelah selesai menggunakannya
      $koneksi->close(); 
      ?>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-4">Tambah Dokumentasi</h2>
    <form action="upload_dokumentasi.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Nama Kegiatan</label>
        <input type="text" name="nama_kegiatan" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Foto (JPG/PNG)</label>
        <input type="file" name="foto" accept="image/*" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-outline-primary">Simpan Dokumentasi</button>
    </form>
  </div>
</section>

<footer class="text-center py-4 bg-dark text-white">
  <p>© <?php echo date("Y"); ?> Portofolio PKL - Diffa dan Martin | Program Studi TKJ</p>
</footer>
<!-- Modal Bootstrap untuk preview gambar -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body text-center bg-white rounded shadow-lg p-4 position-relative">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <img id="modalImage" src="" class="img-fluid mb-3 rounded" style="max-height: 400px;" alt="Preview">
        <h5 id="modalTitle"></h5>
        <p id="modalDesc"></p>
        <small id="modalDate" class="text-muted"></small>
      </div>
    </div>
  </div>
</div>
<script>
  function openPreview(imgSrc, title, desc, date) {
    document.getElementById("modalImage").src = imgSrc;
    document.getElementById("modalTitle").textContent = title;
    document.getElementById("modalDesc").textContent = desc;
    document.getElementById("modalDate").textContent = "Tanggal: " + date;
    var modal = new bootstrap.Modal(document.getElementById('previewModal'));
    modal.show();
  }
</script>


</body>
</html>