<?php
$koneksi = new mysqli("localhost", "root", "", "pkl");

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan di URL.";
    exit;
}

$id = (int)$_GET['id']; // amankan ID agar hanya angka
$sql = "DELETE FROM dokumentasi WHERE kode = $id";

if ($koneksi->query($sql)) {
    // kembali ke beranda dan langsung ke bagian dokumentasi
    header("Location: index.php#dokumentasi");
    exit;
} else {
    echo "Gagal menghapus data. Silakan coba lagi.";
}
?>
