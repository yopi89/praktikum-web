<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim             = $_POST['nim'];
$nama            = $_POST['nama'];
$angkatan        = $_POST['angkatan'];
$no_daftar       = $_POST['no_daftar'];
$tarif_spi       = $_POST['tarif_spi'];
$tarif_ukt_awal  = $_POST['tarif_ukt_awal'];

//query insert data ke dalam database
$query = "INSERT INTO mahasiswa (nim, nama, angkatan, no_daftar, tarif_spi, tarif_ukt_awal) VALUES ('$nim', '$nama', '$angkatan', '$no_daftar', '$tarif_spi', '$tarif_ukt_awal')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>