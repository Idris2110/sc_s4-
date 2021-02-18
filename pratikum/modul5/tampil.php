<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar tamu Undangan yang Hadir </h1><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanggal Lahir</th>
            <th>Tanggal Registrasi</th>
            <th>Komentar</th>
            <th>Umur</th>
        </tr>
        <?php
$conn=mysqli_connect ("localhost","root","","tamu") or die ("koneksi gagal");
$hasil = mysqli_query ($conn,"select * from buku");

while($row = mysqli_fetch_array($hasil))
{
    ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5] ?></th>
            <td><?php echo $row[6] ?></td>
            <td><?php echo $row[7] ?></td>
            <td><?php echo $row[8] ?></td>
        </tr>
        <?php
}
?>
    </table>
    <form action="form_tamu.html" method="post">
        <td colspan="2"><input type="submit" value="Daftar Lagi"></td>
    </form>

</body>

</html>