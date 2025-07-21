<?php
$koneksi = new mysqli("localhost", "root", "", "pkl");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];

    // Ambil file foto
    $foto = $_FILES['foto']['tmp_name'];
    $foto_blob = addslashes(file_get_contents($foto)); // ubah jadi format untuk MySQL

    // Simpan ke database
    $sql = "INSERT INTO dokumentasi (nama_kegiatan, deskripsi, tanggal, foto)
            VALUES ('$nama_kegiatan', '$deskripsi', '$tanggal', '$foto_blob')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Dokumentasi berhasil ditambahkan!'); window.location.href='index.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . $koneksi->error;
    }
}
?>
