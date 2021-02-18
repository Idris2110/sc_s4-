<?php
function balok($panjang, $lebar, $tinggi){
    $volume=$panjang*$lebar*$tinggi;
    return $volume;

}

echo "volume balok dengan panjang 6, lebar 4, dan tinggi 3 aadalah " , balok(3,4,6);
echo ", dan volume balok dengan panjang 10, lebar 4 dan tinggi 3 adalah " , balok(4,10,3);

?>