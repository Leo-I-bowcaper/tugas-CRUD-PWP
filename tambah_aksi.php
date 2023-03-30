<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nrp                    = $_POST['nrp'];
$nama                   = $_POST['nama'];
$jenis_kelamin          = $_POST['jenis_kelamin'];
$jurusan                = $_POST['jurusan'];
$email_student          = $_POST['email_student'];
$alamat                 = $_POST['alamat'];
$no_hp                  = $_POST['no_hp'];
$asal_sma               = $_POST['asal_sma'];
$mata_kuliah_favorit    = $_POST['mata_kuliah_favorit'];

// input data ke database
mysqli_query($koneksi, "INSERT INTO `mahasiswa` (``, `$nrp`, `$nama`, `$jenis_kelamin`, `$jurusan`, `$email_student`, `$student`, `$alamat`, `$no_hp`, `$asal_sma`, `$mata_kuliah_favorit`)");

// mengalihkan ke halaman (index.php)
header("location:index.php");

?>