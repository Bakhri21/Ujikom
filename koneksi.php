<?php
$conn = mysqli_connect("localhost","root","","informasisekolah");

if($conn->connect_errno){
    die("koneksi gagal : ".$conn->error);
}