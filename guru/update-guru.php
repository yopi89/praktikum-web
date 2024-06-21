<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_guru     = $_POST['idguru'];
$nama_lengkap = $_POST['nama'];
$golongan     = $_POST['golongan'];
$gender     = $_POST['gender'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_guru SET  nama = '$nama_lengkap', golongan = '$golongan',jenis_kelamin ='$gender' WHERE idguru = '$id_guru'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>