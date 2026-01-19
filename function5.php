<?php
function hitungtotalniali($nilai) {
    $total = 0;
    foreach ($nilai as $value) {
        $total += $value;
    }
    return $total;
}
?>
