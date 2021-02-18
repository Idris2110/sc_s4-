<?php
function prima($angka){
    for($i=2;$i<=$angka;$i++){
        if($angka%$i==0){
            $cek++;
        }
    }
    if($cek==1){
        echo "prima";
    }
    else{
        echo "bukan Prima";
    }
}
prima(20);

?>