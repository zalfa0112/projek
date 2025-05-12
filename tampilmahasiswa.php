<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<?php
$nama = $_POST['nama'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$jeniskel = $_POST['jeniskel'] ?? '';
$pekerjaan = $_POST['pekerjaan'] ?? '';
$hobi1 = $_POST['hobi1'] ?? '';
$hobi2 = $_POST['hobi2'] ?? '';
$hobi3 = $_POST['hobi3'] ?? '';
?>

<table border=1 bgcolor="grey">
    <tr>
        <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
    </tr>
    <tr>
        <td>Nama</td><td><?php echo htmlspecialchars($nama); ?></td>
    </tr>
    <tr>
        <td>Alamat</td><td><?php echo htmlspecialchars($alamat); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td><td><?php echo htmlspecialchars($jeniskel); ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td><td><?php echo htmlspecialchars($pekerjaan); ?></td>
    </tr>
    <tr>
        <td>Hobi</td><td><?php echo htmlspecialchars($hobi1 . ", " . $hobi2 . ", " . $hobi3); ?></td>
    </tr>
</table>
<a href="forminputmahasiswa.php">INPUT DATA LAGI</a>

</body>
</html>
