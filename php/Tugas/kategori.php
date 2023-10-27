<?php

$nama = "Irfan";
$tb = 166;
$bb = 65;
$hasil = $tb /100;
$bmi = $bb / ($hasil * $hasil);

echo "<h3>Hasil perhitungan BMI</h3>";
echo "Nama Anda: $nama<br>";
echo "Tinggi Badan: $tb meter<br>";
echo "Berat Badan: $bb kilogram<br>";

echo "<br> Hallo, $nama nilai BMI anda adalah ".number_format($bmi);

if($bmi < 18.5) {
    echo "<br>Anda termasuk kurus";
}elseif ($bmi < 25 ) {
    echo "<br>Anda termasuk sedang";
}else {
    echo "<br>Anda termasuk gemuk";
}
?>