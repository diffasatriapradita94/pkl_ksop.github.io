<?php
$koneksi = new mysqli("localhost", "root", "", "pkl");

$id = $_POST['id'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

if ($_FILES['foto']['error'] == 0) {
    $foto_blob = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $sql = "UPDATE dokumentasi SET nama_kegiatan='$nama_kegiatan', deskripsi='$deskripsi', tanggal='$tanggal', foto='$foto_blob' WHERE kode =$id";
} else {
    $sql = "UPDATE dokumentasi SET nama_kegiatan='$nama_kegiatan', deskripsi='$deskripsi', tanggal='$tanggal' WHERE kode =$id";
}

if ($koneksi->query($sql)) {
    header("Location: index.php#dokumentasi");
    exit;
} else {
    echo "Gagal menyimpan perubahan.";
}
?>
