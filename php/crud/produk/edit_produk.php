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
            include "../koneksi.php";
            $id_produk = $_GET['id_produk'];

            $produk = mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id_produk'");
            while($data = mysqli_fetch_array($produk)){
                $nama_produk = $data['nama_produk'];
                $id_kategori = $data['id_kategori'];
                $harga = $data['harga'];
                $stok = $data['stok'];
                $tgl_masuk = $data['tgl_masuk'];
            }
            ?>
                <form action="proses_edit.php?id_produk=<?php echo $id_produk; ?>" method="post" style="margin: 100px;">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_produk" value="<?php echo $nama_produk; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-8 mt-1">
                            <select name="id_kategori">
                                <?php
                                include "../koneksi.php";
                                $query = mysqli_query($conn,"SELECT * FROM kategori");
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value=$data[id_kategori]> $data[nama_kategori]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="stok" value="<?php echo $stok; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="tgl_masuk" value="<?php echo $tgl_masuk; ?>">
                        </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 150px; margin-top: 20px; margin-bottom: 140px;">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>