<html>
<head>
<title>Simpan Registrasi</title>
</head>
<body>
<h1>Simpan Registrasi Mahasiswa</h1>

<?php


$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tgllahir = $_POST["tgllahir"];
$password = $_POST["password"];
$jeniskelamin = $_POST["jeniskelamin"];
$hobi = $_POST["hobi"];
$kotaasal= $_POST["kotaasal"];
$alamat= $_POST["alamat"];

$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
mysqli_select_db ($conn, "bdpratikum");

$sqlstr="insert into registrasimhs (nim,nama,tgllahir, password,jeniskelamin,hobi,kotaasal,alamat)
values('$nim','$nama','$tgllahir','$password','$jeniskelamin','$hobi','$kotaasal','$alamat')";

$hasil = mysqli_query ($conn, $sqlstr); 
if($hasil){
echo "<h2>Registrasi Berhasil!</h2>";
} else{
echo "<h2>Registrasi Tidak Berhasil!</h2>";
}
?>
<br>
<table><tr><td>
<form action="tampil.php" method="post">
<td colspan="2"><input type="submit" value="Lihat Data"></td></form>
<form action="formulir.html" method="post">
<td colspan="2"><input type="submit" value="Daftar Lagi"></td></form>
</td></tr></table>
</body>
</html>
