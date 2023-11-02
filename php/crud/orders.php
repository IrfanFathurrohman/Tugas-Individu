<?php 
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM kustomer JOIN kota ON kota.id_kota = kustomer.id_kota;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="background-color: rgb(77, 77, 77);">
    <div class="container" style="color: white;">
        <div class="row">
          <div class="col-md-10 mx-auto" style="background-color: rgb(0, 0, 0);">

            <div class="row">
              <div class="col-md-12">
                <nav class="navbar">
                  <div class="container-fluid">
                    <a class="navbar-brand link-light ms-2" href="#">
                      LOGO
                    </a>
                    <ul class="nav justify-content-end ">
                      <li class="nav-item">
                        <a class="nav-link link-light" href="index.php">Customer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-light" href="produk.php">Produk</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-light" href="orders.php">Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-light" href="kota.php">Kota</a>
                      </li>
                    </ul>
                  </div>
                </nav>    
              </div>   
            </div>

            
            <div class="row tabel">
                <h1 align="center"> Data Orderan Toko Kue</h1>
                <div class="col-md-12 my-5 px-4">
                    <a class="btn btn-primary mb-3" href="tambah_customer.php" role="button" style="margin-left: 150px;">Tambah Data</a>
                    <table border="1" cellspacing="0" align="center">
                        <thead>
                            <tr style="background-color: rgb(0, 0, 0); color: white;">
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
                </div>
            </div>

            
            
            <div class="row">
              <div class="col-12 text-center">Footer</div>
            </div>

          </div>
        </div>
    </div>
</body>
</html>