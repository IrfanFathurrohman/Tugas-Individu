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
    <style>
      
    </style>
</head>
<body style="background-color: rgb(77, 77, 77);">
    <div class="container" >
        <div class="row">
          <div class="col-md-10 mx-auto" style="background-color: rgb(0, 0, 0);">
            <div class="row">
              <div class="col-md-12 mx-auto" style="background-color: rgb(0, 0, 0);">

                <div class="row">
                  <div class="col-md-12">
                    <nav class="navbar">
                      <div class="container-fluid">
                        <a class="navbar-brand link-light ms-2" href="index.php">
                          HOME
                        </a>
                        <ul class="nav justify-content-end ">
                          <li class="nav-item">
                            <a class="nav-link link-light" href="kustomer/kustomer.php">Customer</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link link-light" href="produk/produk.php">Produk</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link link-light" href="kota/kota.php">Kota</a>
                          </li>
                        </ul>
                      </div>
                    </nav>    
                  </div>   
                </div>

                
                <div class="row tabel" style="height: 900px;">
                    <div class="col-md-6 my-5 px-4">
                        <img src="kue.jpg" style="width: 500px;">
                    </div>
                    <div class="col-md-6 my-5 px-4" style="font-family: 'Courier New', Courier, monospace;">
                      <h1 align="center" style="margin-bottom: 50px; margin-top:100px;">TOKO KUE</h1>
                      <a class="btn link-light" href="kustomer/kustomer.php" style="background-color:black; height: 70px; width:100%; margin-bottom: 50px; font-size:40px;">Customers</a>
                      <a class="btn link-light" href="produk/produk.php" style="background-color:black; height: 70px; width:100%; margin-bottom: 50px; font-size:40px;">Product</a>
                      <a class="btn link-light" href="kota/kota.php" style="background-color:black; height: 70px; width:100%; margin-bottom: 50px; font-size:40px;">Kota</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>