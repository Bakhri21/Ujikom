<?php

include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nis"]));
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama"]));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["password"]));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["kelas"]));
    $tempat_lahir = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["tempat_lahir"]));
    $tgl_lahir = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["tgl_lahir"]));
    $jk = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["jenis_kelamin"]));
    $agama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["agama"]));
    $alamat = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["alamat"]));
    $ayah = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama_ayah"]));
    $ibu = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama_ibu"]));

    $sql = "INSERT INTO $kelas (nis,nama,password,kelas,tempat_lahir,tgl_lahir,jenis_kelamin,agama,alamat,nama_ayah,nama_ibu)
    VALUES('$nis','$nama','$password','$kelas','$tempat_lahir', '$tgl_lahir','$tempat_lahir','$jk','$agama','$alamat','$ayah','$ibu')";

    if ($conn->query($sql) === true) {
        header("location:tambah-user.html");
    } else {
        echo "gagal";
    }

    $conn->close();
}
