<?php
function segitiga($alas, $tinggi){
    $luas=$alas*$tinggi/2;
    return $luas;
}
$alas=10;
$tinggi=20;
echo 'luas segitiga dengan alas 10 dan tinggi 20 adalah '; echo segitiga($alas,$tinggi);
?>