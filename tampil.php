<?php
// memanggil koneksi
include "koneksi.php";

// query
$query = "SELECT * FROM `kelas` ORDER BY `kode_kelas` ASC";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// menampung semua data
$data_kelas = [];

// set penomoran
$nomor = 1;

while ($row = mysqli_fetch_assoc($eksekusi)) {
    $data_kelas[] = $row;
}
?>

<!-- menampilkan tabel -->
<h1>Tabel Kelas</h1>
<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Angkatan</th>
        <th>Progdi</th>
    </tr>

    <?php if (empty($data_kelas)) : ?>
    <tr>
        <td colspan="5">Tidak Ada data</td>
    </tr>
    <?php else : ?>

    <?php foreach ($data_kelas as $kelas) : ?>
    <tr>
        <td><?php echo $nomor++ ?></td>
        <td><?php echo $kelas['kode_kelas'] ?></td>
        <td><?php echo $kelas['nama_kelas'] ?></td>
        <td><?php echo $kelas['angkatan'] ?></td>
        <td><?php echo $kelas['progdi'] ?></td>
    </tr>
    <?php endforeach ?>

    <?php endif ?>
</table>
