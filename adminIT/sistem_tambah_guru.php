<?php

include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nip"]));
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama"]));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["password"]));
    $tempat_lahir = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["tempat_lahir"]));
    $tgl_lahir = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["tgl_lahir"]));
    $jk = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["jenis_kelamin"]));
    $perguruan = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["perguruan_tinggi"]));
    $agama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["agama"]));
    $alamat = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["alamat"]));

    $nip_cek = "SELECT nis FROM $kelas WHERE nip = $nip";
    $result = $conn->query($nip_cek);
    $row = $result->fetch_assoc();

    if ($row > 0) {
        header("location:tambah-user.php?penambahandata=gagal&akun=siswa");
    } else {
        $sql = "INSERT INTO guru (nip,nama,password,tempat_lahir,tgl_lahir,jenis_kelamin,perguruan_tinggi,agama,alamat)
        VALUES('$nip','$nama','$password','$tempat_lahir', '$tgl_lahir','$jk','$perguruan','$agama','$alamat')";

        if ($conn->query($sql) === TRUE) {
            header("location:tambah-user.php?penambahandata=berhasil&akun=siswa");
        } else {
            header("location:tambah-user.php?penambahandata=gagal&akun=siswa");
        }

        $conn->close();
    }
}
