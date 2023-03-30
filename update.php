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

// Update data ke database
mysqli_query($koneksi,"UPDATE mahasiswa set nrp = `$nrp`, nama = `$nama`, jenis_kelamin = `$jenis_kelamin`, jurusan = `$jurusan`, email_student = `$email_student`, alamat = `$alamat`, no_hp = `$no_hp`, asal_sma = `$asal_sma`, mata_kuliah_favorit = `$mata_kuliah_favorit`");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>