<?php
//No 1
for($a=1;$a<=1;$a++){
    for($b=1;$b<=10;$b++)
    {
    $total=$a*$b;
    echo "<p> $a x $b=$total<br>";
    }
}
?>

<?php
//No 2
echo "<br>";
$i=10;

for($a=1; $a<=$i; $a++){
    for($c=$i; $c>=$a; $c--){
        echo "*";
    }
    echo "<br>";
}
?>

<?php
//No 3
echo "<br>";
for ($i = 0; $i <= 8; $i++){
    for ($a = 0; $a <= $i; $a++){
        echo $a;
    }
    echo "<br>";
}

?>