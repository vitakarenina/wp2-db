<?php
require_once 'koneksi.php';

$sql = "select * from mahasiswa where nim='" . $_GET['nim'] . "'";
$result = pg_query($sql);
$data = pg_fetch_object($result);
?>

<h1>Form Ubah Data</h1>

<form method="POST">
    NIM : 
<?php
echo '<input type="text" name="nim" readonly value="' . $data->nim . '"><br>';
?>
    NAMA : 
<?php
echo '<input type="text" name="nama" value="' . $data->nama . '"><br>';
?>
    KELAS : 
<?php
echo '<input type="text" name="kelas" value="' . $data->kelas . '"><br>';
?>
    <input type="submit" value="Simpan">
</form>