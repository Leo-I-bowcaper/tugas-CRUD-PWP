<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySQLi Leo</title>
</head>
<body>
    <h2>CRUD DATA Mahasiswa</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table border= "1" >
        <tr>
            <th>NO</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>jenis kelamin</th>
            <th>Jurusan</th>
            <th>Email student</th>
            <th>alamat</th>
            <th>NO. HP</th>
            <th>Asal SMA</th>
            <th>Mata Kuliah Favorit</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nrp']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['email_student']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['asal_sma']; ?></td>
                <td><?php echo $d['mata_kuliah_favorit']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d ['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d ['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>