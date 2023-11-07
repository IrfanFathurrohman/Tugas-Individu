<?php 
include "../koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM produk INNER JOIN kategori ON kategori.id_kategori = produk.id_kategori;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
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
                    <a class="navbar-brand link-light ms-2" href="../index.php">
                      HOME
                    </a>
                    <ul class="nav justify-content-end ">
                      <li class="nav-item">
                        <a class="nav-link link-light" href="../kustomer/kustomer.php">Customer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-light" href="produk.php">Produk</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-light" href="../kota/kota.php">Kota</a>
                      </li>
                    </ul>
                  </div>
                </nav>    
              </div>   
            </div>

            
            <div class="row tabel" >
                <h1 align="center"> Data Produk Toko Kue</h1>
                <div class="col-md-12 my-5 px-4" style="height: 700px;">
                    <a class="btn btn-primary mb-3" href="tambah_produk.php" role="button">Tambah Data</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: rgb(0, 0, 0); color: white; text-align: center;">
                                <th>No </th>
                                <th>Nama Produk </th>
                                <th>Kategori </th>
                                <th>Harga </th>
                                <th>Stok </th>
                                <th>Tanggal masuk </th>
                                <th>Aksi </th>
                            </tr>
                        </thead>

                        <?php 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)) { 
                        ?>

                        <tbody>
                            <tr style="text-align: center;">
                                <td><?php echo $no;?></td>
                                <td><?php echo $data['nama_produk']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td><?php echo $data['stok']; ?></td>
                                <td><?php echo $data['tgl_masuk']; ?></td>
                                <td>
                                  <a class="btn btn-success" href="edit_produk.php?id_produk=<?php echo $data["id_produk"]; ?>">Edit</a>
                                  <a onclick="return confirm('Yakin Hapus?');" class="btn btn-danger alert_notif" href="hapus.php?id_produk=<?php echo $data["id_produk"]; ?>">Hapus</a>
                                </td>
                                
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