<?php
// memanggil koneksi
include "koneksi.php";

// ambil data inputan form
$kode_kelas = $_POST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$angkatan   = $_POST['angkatan'];
$progdi     = $_POST['progdi'];

// query
$query = "INSERT INTO `kelas` (`kode_kelas`, `nama_kelas`, `angkatan`, `progdi`)
          VALUES ('$kode_kelas', '$nama_kelas', '$angkatan', '$progdi');";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// cek insert
if ($eksekusi) {
    exit("<script>window.location = 'tambah.php';</script>");
} else {
    exit("<script>alert('Gagal simpan'); window.location = 'tambah.php'</script>");
}
?>
