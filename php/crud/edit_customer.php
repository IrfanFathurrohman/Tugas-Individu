<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="background-color: rgb(77, 77, 77);">
    <div class="container" style="color: white;">
        <div class="row">
            <div class="col-md-10 mx-auto" style="background-color: rgb(0, 0, 0);">
            <h3 class="my-5" align="center">Form Tambah Data Customer</h3>

            <?php
            // include "koneksi.php";
            // $id = $_GET['nama_lengkap'];
            // $customer = mysqli_query($conn,"SELECT * FROM kustomer WHERE nama_lengkap='$id'");
            // while($data = mysqli_fetch_array($customer)){
            ?>
                <form action="proses_customer.php" method="post" style="margin: 100px;">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['id_customer']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-8 mt-1">
                            <select name="id_kota" value="<?php echo $data['id_customer']; ?>">
                                <?php
                                include "koneksi.php";
                                $query = mysqli_query($conn,"SELECT * FROM kota");
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value=$data[id_kota]> $data[nama_kota]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Telpon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="telpon" value="<?php echo $data['telpon']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
                        </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 150px; margin-top: 20px; margin-bottom: 140px;">Simpan</button>
                </form>
                <?php  ?>
            </div>
        </div>
    </div>
</body>
</html>