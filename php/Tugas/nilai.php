<?php
$nilai = 50;
echo "Nilai anda  = $nilai <br>";
switch (true)
{
	case ($nilai >= 90 && $nilai <=100) :
		echo 'Grade A  <br/>';
		break;
	case ($nilai >= 80 && $nilai <= 90) :
		echo 'Grade B <br/>';
		break;
	case ($nilai >= 70 && $nilai <= 80) :
		echo 'Grade C <br/>';
		break;
	case ($nilai >= 0 && $nilai <= 70) :
		echo 'Grade D <br/>';
		break;
	default : 
		echo 'Nilai yang anda masukan salah, tidak memiliki grade';
}
?>