<!DOCTYPE html>
<html>
<head>
    <title>Ini Contoh View</title>
</head>
<body>
<table border="ipx solid black">
    <tr>
        <th>Nama Siswa</th>
        <th>Nis</th>
        <th>Alamat</th>
    </tr>
    <?php foreach ($siswa as $sis): ?>
        <tr>
            <td><?php echo $sis['nama']; ?></td>
            <td><?php echo $sis['nis']; ?></td>
            <td><?php echo $sis['alamat']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>          
</body>
</html>    