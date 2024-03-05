<?php
include "../koneksi.php";

$nis = $_GET['nis'];

$dell = "DELETE FROM siswa WHERE nis = $nis";

if($conn->query($dell)){
    header("location:halaman_data_siswa_admin_it.php");
}

?>