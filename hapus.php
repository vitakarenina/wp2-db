<?php
//echo $_GET["nim"];
require_once('koneksi.php');

$sql = "delete from mahasiswa where nim='" . $_GET['nim'] . "'";
$result = pg_query($sql);

if($result) {
    echo '<script type="text/javascript">';
    echo 'alert("Data telah terhapus");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Data GAGAL terhapus");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
?>