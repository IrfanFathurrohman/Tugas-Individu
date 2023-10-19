<?php
    echo "SOAL NO. 1 <br>";
    for($no = 1; $no<=10; $no++){
        if($no % 2 == 0){
            echo "$no adalah bilangan genap<br>";
        }
        else{
            echo "$no adalah bilangan ganjil<br>";
        }
    }

    echo "<br>SOAL NO. 2<br>";
    
    for($tahun = 2000; $tahun<=2023; $tahun++){
        if ($tahun % 4 == 0){
            echo "$tahun adalah tahun kabisat<br>";
        }else {
            echo "$tahun bukan tahun kabisat<br>";
        }
    }

    echo "<br>SOAL NO. 3<br>";

    for ($a=9; $a >= 1 ; $a--) { 
        for ($b=1; $b <= $a ; $b++) { 
            echo "$b";
        }
        echo "<br>";
    }
?>

