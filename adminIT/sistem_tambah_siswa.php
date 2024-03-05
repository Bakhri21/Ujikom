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

    $nis_cek = "SELECT nis FROM $kelas WHERE nis = $nis";
    $result = $conn->query($nis_cek);
    $row = $result->fetch_assoc();

    if ($row > 0) {
        header("location:tambah-user.php?penambahandata=gagal&akun=siswa");
    } else {

        $sql = "INSERT INTO $kelas (nis,nama,password,kelas,tempat_lahir,tgl_lahir,jenis_kelamin,agama,alamat,nama_ayah,nama_ibu)
    VALUES('$nis','$nama','$password','$kelas','$tempat_lahir', '$tgl_lahir','$jk','$agama','$alamat','$ayah','$ibu')";

        if ($conn->query($sql) === TRUE) {
            header("location:tambah-user.php?penambahandata=berhasil&akun=siswa");
        } else {
            header("location:tambah-user.php?penambahandata=gagal&akun=siswa");
        }

        $conn->close();
    }
}
