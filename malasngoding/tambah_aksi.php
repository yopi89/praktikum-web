<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if(isset ($_POST['add'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

 
    // menginput data ke database
    mysqli_query($koneksi,"insert into mahasiswa (nama, nim,alamat) values('$nama','$nim','$alamat')");
}
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>