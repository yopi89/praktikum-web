<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nuptk        = $_POST['nuptk'];
$nama_lengkap = $_POST['nama_lengkap'];
$golongan     = $_POST['golongan'];
$gender     = $_POST['gender'];
//query insert data ke dalam database
$query = "INSERT INTO tbl_guru (nuptk, nama, golongan, jenis_kelamin) VALUES ('$nuptk', '$nama_lengkap', '$golongan', '$gender')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>