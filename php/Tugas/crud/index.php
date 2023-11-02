<?php 
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM kustomer JOIN kota ON kota.id_kota = kustomer.id_kota;");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Desain Tabel dengan CSS</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

       <body>
        <h1 align="center"> Data Customer Toko Kue</h1>

        <table border="1" cellspacing="0" align="center">
            <thead>
                <tr>
                    <th>No </th>
                    <th>Nama </th>
                    <th>Kota </th>
                    <th>Alamat </th>
                    <th>Email </th>
                    <th>Telpon </th>
                    <th>Password </th>
                </tr>
            </thead>

            <?php 
            $no = 1;
            while($data = mysqli_fetch_array($query)) { 
            ?>

            <tbody>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['nama_kota']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['telpon']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    
                </tr>
            </tbody>
            <?php $no++; } ?>
        </table>

      </body>

</html>