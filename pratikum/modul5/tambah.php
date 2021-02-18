<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Simpan Registrasi Tamu Undangan</h1>
    <?php
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jurusan=$_POST["jurusan"];
        $alamat= $_POST["alamat"];
        $telp= $_POST["telp"];
        $tgllahir = $_POST["tgllahir"];
        $tglskrg= date('Y-m-d');
        $komentar= $_POST["komentar"];
        
        function usia($tgl_lahir){
            global $umur;
            $tanggal = new DateTime($tgl_lahir);
            $today = new DateTime('today');
            $y = $today->diff($tanggal)->y;
            $umur = $y ;
            }
        $umur;
        usia($tgllahir);


        $conn=mysqli_connect ("localhost","root","","tamu") or die ("koneksi gagal");

        $sqlstr="insert into buku (nama,nim,jurusan,tgllahir,tglskrg,alamat,telp,komentar,umur)
        values('$nama','$nim','$jurusan','$tgllahir','$tglskrg','$alamat','$telp','$komentar','$umur')";

        $hasil = mysqli_query ($conn, $sqlstr); 
        if($hasil){
        echo "<h2>Registrasi Berhasil!</h2>";
        } else{
        echo "<h2>Registrasi Tidak Berhasil!</h2>";
        }
        ?>
    <h3>Data yang sudah diinputkan</h3><br>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>NIM </td>
            <td>:</td>
            <td><?php echo $nim;?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $jurusan;?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $tgllahir;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>No telepon</td>
            <td>:</td>
            <td><?php echo $telp;?></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td>:</td>
            <td><?php echo $komentar;?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?php echo $umur;?></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>
                <form action="tampil.php" method="post">
            <td colspan="2"><input type="submit" value="Lihat Data"></td>
            </form>
            <form action="form_tamu.html" method="post">
                <td colspan="2"><input type="submit" value="Daftar Lagi"></td>
            </form>
            </td>
        </tr>
    </table>
</body>

</html>