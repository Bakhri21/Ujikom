<?php
$conn = mysqli_connect("localhost","root","","multi_user");

if($conn->connect_errno){
    die("koneksi gagal : ".$conn->error);
}