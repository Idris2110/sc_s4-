<h1>Daftar Mahasiswa </h1><br>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Password</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Kota Asal</th>
        <th>Alamat</th>
    </tr>
    <?php
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
    mysqli_select_db ($conn, "bdpratikum");
    
    $hasil = mysqli_query ($conn, "select * from registrasimhs");
    
    while($row = mysqli_fetch_array ($hasil))
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
    </tr>
    <?php
        }
        ?>
</table>