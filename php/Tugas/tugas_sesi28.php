<!DOCTYPE html>
<html>
<head>
	<title>Irfan</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        
    }
    table {
        margin-top: 50px;
    }
    h1 {
        margin: auto;
        font-size: 20px;
        background-color: #FFD700;
        padding-left: 30px;
        padding: 10px;
    }
    th {
        padding: 15px;
    }
    td {
        text-align: left;
        padding: 15px;
    }
</style>
<body>
    <h1>Daftar Nilai</h1>

    <!-- table -->
		<table border="1" cellspacing="0" align="center">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Tanggal lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Nilai</th>
                <th>Hasil</th>
			</tr>

            <?php
            $data = file_get_contents("data.json");
            $students = json_decode($data);
            $no = 1;
            
            
                
            foreach ($students as $student){
                if($no % 2 == 0){
                    $warna='#fff';
                }
                else{
                    $warna='#ccc';
                }
            ?>

            <tr bgcolor= "<?php echo $warna ?>">
                <td><?php echo $no;?></td>
                <td>
                    <?php 
                        echo $student->nama;
                    ?>
                </td>
                <td>
                    <?php 
                        echo $student->tanggal_lahir;
                    ?>
                </td>
                <td>
                    <?php 
                        $lahir = new DateTime($student->tanggal_lahir);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y;
                    ?>
                </td>
                <td>
                    <?php 
                        echo $student->alamat;
                    ?>
                </td>
                <td>
                    <?php 
                        echo $student->kelas;
                    ?>
                </td>
                <td>
                    <?php 
                        echo $student->nilai;
                    ?>
                </td>
                <td>
                    <?php 
                    $nilai=$student->nilai;
                        if ($nilai <= 59) {
                            echo "E";
                        } else if ($nilai >= 60 && $nilai <= 69) {
                            echo "D";
                        } else if ($nilai >= 70 && $nilai <= 79) {
                            echo "C";
                        } else if ($nilai >= 80 && $nilai <= 89) {
                            echo "B";
                        } else if ($nilai >= 90 && $nilai <= 100) {
                            echo "A";
                        } 
                    ?>
                </td>
                
            </tr>
            <?php $no++;}
            ?>
 
		</table>
	
</body>
</html>