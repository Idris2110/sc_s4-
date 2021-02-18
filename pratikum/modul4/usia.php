<?php
// tanggal lahir
$tanggal = new DateTime('2000-10-21');

// tanggal hari ini
$today = new DateTime('today');

// tahun
$y = $today->diff($tanggal)->y;

// bulan
$m = $today->diff($tanggal)->m;

// hari
$d = $today->diff($tanggal)->d;
echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>