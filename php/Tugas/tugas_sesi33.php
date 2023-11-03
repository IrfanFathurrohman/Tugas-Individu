<!-- no 1 -->
<?php
echo "NO. 1 <br>";
$array = array("satu", "dua", "tiga", "empat", "lima");

for ($i=4; $i>= 0; $i--){
    echo "$array[$i] <br>";
}
?>

<!-- no 2 -->
<?php
echo "<br>NO. 2 ";
$array2 = array("apel", "nanas", "mangga", "jeruk");

echo "<br> Terdapat ". count($array2). " buah";
?>

<!-- no 3 -->
<?php
echo "<br><br>NO. 3 <br>";
$array3 = array(7, 3, 4, 9);
$total = array_sum($array3);

echo $total. "<br><br>";
?>

<!-- no 4 -->
<?php
echo "NO. 4 <br>";
for ($i=1; $i <= 10; $i++) { 
  $hasil = 1*$i;
  echo "1 x $i = $hasil <br>";
}
?>