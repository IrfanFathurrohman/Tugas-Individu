<?php 
echo "<h3> Menghitung Volume Kubus</h3>";
	$sisi = 15;
	$volume = $sisi*$sisi*$sisi;

		echo " Rumus Volume : V = S<sup>3</sup><br>";
		echo " S adalah panjang rusuk kubus / sisi<br>";
		echo " Panjang Sisi Kubus (s) : $sisi cm<br>";
		echo " V = $sisi x $sisi x $sisi  <br>";
		echo " Hasil Volume nya adalah : $volume <br><br> ";
?>

<?php
echo "<h3>Menghitung Volume Limas</h3>";
	$p = 1/3;
	$luas_alas = 48;
	$tinggi = 16;
	$volume = $p*$luas_alas*$tinggi;
		
		echo " Rumus Volume : V = 1/3 x Luas Alas x Tinggi<br>";
		echo " Luas Alas : $luas_alas cm <br>";
		echo " Tinggi : $tinggi cm <br>"; 
		echo " V = 1/3 x $luas_alas x $tinggi  <br>";
		echo " Hasil Volume nya adalah : $volume <br><br>";
?>

<?php
echo "<h3>Menghitung Volume Prisma</h3>";
	$luas_alasa = 50;
	$tinggi = 3;
	$volume = $luas_alas*$tinggi;

		echo " Rumus Volume : V = Luas Alas x Tinggi<br>";
		echo " Luas Alas : $luas_alas cm<br>";
		echo " Tinggi : $tinggi cm <br>"; 
		echo " V = $luas_alas x $tinggi  <br>";
		echo " Hasil Volume nya adalah : $volume ";

?>