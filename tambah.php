<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySQLi Leo</title>
</head>
<body>

    <h2>CRUD DATA Mahasiswa</h2>
    <br/>
    <a href="index.php">kembali</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>NRP</td>
                <td><input type="number" name="nrp"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Email Student</td>
                <td><input type="text" name="email_student"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Asal SMA</td>
                <td><input type="text" name="asal_sma"></td>
            </tr>
            <tr>
                <td>Mata Kuliah Favorit</td>
                <td><input type="text" name="mata_kuliah_favorit"></td>
            </tr>
            <tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>

        </table>
    </form>
</body>
</html>