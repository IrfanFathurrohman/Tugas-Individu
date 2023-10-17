<?php

//Membuat output bilangan ganjil dan genap
$bilangan=15;

if ($bilangan % 2 == 0){
    echo "$bilangan adalah bilangan genap";
}else {
    echo "$bilangan adalah bilangan ganjil <br>";
}


//membuat tahun kabisat
$tahun=2000;

if ($tahun % 4 == 0){
    echo "$tahun adalah tahun kabisat <br>";
}else {
    echo "$tahun bukan tahun kabisat <br>";
}


//membuat grade nilai
$nilai=70;

if ($nilai <= 59) {
    echo "$nilai merupakan Grade = E";
} else if ($nilai >= 60 && $nilai <= 69) {
    echo "$nilai merupakan Grade = D";
} else if ($nilai >= 70 && $nilai <= 79) {
    echo "$nilai merupakan Grade = C";
} else if ($nilai >= 80 && $nilai <= 89) {
    echo "$nilai merupakan Grade = B";
} else if ($nilai >= 90 && $nilai <= 100) {
    echo "$nilai merupakan Grade = A";
} 
else{
    echo 'Nilai : ' . $nilai . ' Masukkan nilai dengan benar.';
}

?>