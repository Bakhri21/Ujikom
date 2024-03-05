<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nis"]));
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama"]));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["kelas"]));
    $pweb = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["pweb"]));
    $pkk = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["pkk"]));
    $bd = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["basis_data"]));
    $pbo = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["pbo"]));

    // Perbaikan query
    $query = "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', pweb='$pweb', pkk='$pkk', basis_data='$bd', pbo='$pbo' WHERE nis='$nis'";

    if ($conn->query($query) === TRUE) {
        header("location: halaman_data_siswa_admin_it.php?edit=berhasil");
    } else {
        header("location: halaman_data_siswa_admin_it.php?edit=gagal");
    }

    $conn->close();
} else {
    echo "Metode pengiriman form salah.";
}
?>
