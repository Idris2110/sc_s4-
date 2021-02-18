<?php
function update_counter() {
static $counter = 0 ;
$counter++;
echo "Nilai \$counter di dalam fungsi : $counter<br>";
}
$counter = 10;
update_counter();
update_counter();
echo "\$counter global adalah: $counter <br>";
?>
