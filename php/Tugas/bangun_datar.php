<?php
echo "<h3>Menghitung Luas segitiga</h3>";
	
	$alas = 7;
	$tinggi = 10;
	$luas = 1/2*$alas*$tinggi;

	echo "Alas segitiga = $alas cm <br>";
	echo "Tinggi segi tiga = $tinggi cm <br>";
	echo "Luas segitiga = 1/2 x alas x tinggi = 1/2*$alas*$tinggi = $luas <br><br>";

?>

<?php
echo "<h3>Menghitung Luas Persegi Panjang</h3>";
 
	 $panjang = 10;
	 $lebar = 6;
	 $luas = $panjang * $lebar;
	 
	 echo "Panjang persegi panjang = $panjang cm <br>";
	 echo "Lebar persegi panjang = $lebar cm <br>";
	 echo "Luas persegi panjang = panjang x lebar = $panjang * $lebar = $luas <br><br>";
?>

<?php
echo "<h3>Menghitung Luas lingkaran</h3>";
	
	$phi = 22/7;
	$jarijari = 8;
	$luas = $phi*$jarijari*$jarijari;

	echo "Jari-jari lingkaran = $jarijari <br>";
	echo "Luas Lingkaran = phi x jarijari <sup>2</sup> = $phi*$jarijari*$jarijari = $luas <br><br>";
?>

<?php
echo "<h3>Menghitung Luas trapesium</h3>";

	$rusuk1= 15;
	$rusuk2 = 20;
	$tinggi = 10;
	$luas = 1/2 * ($rusuk1 + $rusuk2) * $tinggi;

	echo "Panjang rusuk 1 = $rusuk1 cm <br>";
	echo "Panjang rusek 2 = $rusuk2 cm <br>";
	echo "Tinggi trapesium = $tinggi cm <br>";
	echo "Luas Trapesium = 1/2 x (rusuk1 + rusuk2) x tinggi = 1/2 * ($rusuk1 + $rusuk2) * $tinggi = $luas <br><br> ";

?>

<?php 
echo "<h3>Menghitung luas Belah Kerupat</h3>";

	$diagonal1= 6;
	$diagonal2= 7;
	$luas = 1/2 * $diagonal1 * $diagonal2;

	echo "Panjang diagonal 1 = $diagonal1 cm<br>";
	echo "Panjang diagonal 2 = $diagonal2 cm<br>";
	echo "Luas Belah ketupat = 1/2 x diagonal1 x diagonal2 = 1/2 * $diagonal1 * $diagonal2 = $luas";


?> 
