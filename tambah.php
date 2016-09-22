<h1>Form Penambahan Data Kelas</h1>

<form method="post" action="simpan.php" autocomplete="off">

<table>
    <tr>
        <td>Kode Kelas</td>
        <td>:</td>
        <td>
            <input type="text" name="kode_kelas" placeholder="..." maxlength="5" required>
        </td>
    </tr>

    <tr>
        <td>Nama Kelas</td>
        <td>:</td>
        <td>
            <input type="text" name="nama_kelas" placeholder="..." maxlength="20" required>
        </td>
    </tr>

    <tr>
        <td>Angkatan</td>
        <td>:</td>
        <td>
            <input type="number" name="angkatan" placeholder="..." maxlength="2" max="99" min="0" required>
        </td>
    </tr>

    <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td>
            <select name="progdi" required>
                <option value="-" selected disabled>- pilih -</option>
                <option value="SI">S1 - Sistem Informasi</option>
                <option value="TI">S1 - Teknik Informatika</option>
                <option value="TK">D3 - Teknik Komputer</option>
                <option value="MI">D3 - Manajemen Informatika</option>
            </select>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="tambah" value="Simpan">
        </td>
    </tr>
</table>

</form>

<!-- menampilkan tabel kelas -->
<?php include 'tampil.php'; ?>
