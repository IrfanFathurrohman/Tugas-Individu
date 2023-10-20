<!DOCTYPE html>
<html>
<head>
	<title>Irfan</title>
</head>
<body>

	<h2>Tugas sesi 27</h2>
    <!-- segitiga -->
    <?php

        for($i=0; $i<=8; $i++){
        for($x=0; $x<=$i; $x++){
        echo $x;
        }
        echo "<br />";
        }
        echo "<br>";
    ?>    

    <!-- table -->
		<table border="1" cellspacing="0">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
 
		<?php
        for ($no = 1, $i=1, $a=10; $i<=10, $a>=1  ; $i++, $a--) { 
        ?>
			<tr>
				<td> <?php echo $no; ?></td>
				<td><?php echo "Nama ke $i"; ?></td>
				<td><?php echo $a; ?></td>
			</tr>
		<?php $no++; } 
        ?>
		</table>
	
</body>
</html>