<?php
include "konek.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = mysqli_query($conn, "SELECT * FROM produk where id_barang='$id'");
    $data = mysqli_fetch_assoc($data);

}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $result = "DELETE FROM produk WHERE id_barang='$id' ";

    $update = mysqli_query($conn, $result);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bar_crud.css" />
</head>

<header>
    Cashiercom - Masukkan Data
    <a type="button" href="login.php" style="color:white; margin-left:64%; font-size:27px;">Logout</a>
</header>

<body>

    <div class="sidebar">
        <a style="color:white;" href="penjualan.php">Penjualan</a><br><br>
        <a style="color:blue;" href="barang.php">Gudang</a>
    </div>

    <div class="container">
        <br><br>
        <center>
            <form action="barang.php" id="box" class="margin" method="post">
                <label for="text">Nama Barang: </label><br>
                <input type="text" name="namabarang" class="label" placeholder="Input your Nama barang"
                    value="<?= $data['namabarang'] ?>"><br>

                <label for="text">Harga Barang:</label><br>
                <input type="text" name="harga" class="label" placeholder="Input the price"
                    value="<?= $data['harga'] ?>"><br>

                <label for="text">Stok Barang: </label><br>
                <input type="number" class="label" name="stok" placeholder="Input the stock" min="0"
                    value="<?= $data['stok'] ?>"><br>

                <center><a href="barang.php" class="link">Kembali |</a> <input name="submit" type="submit"
                        value="Submit" class="button"></center>

            </form>
        </center>
    </div>

</body>
<div class="footer">Copyrights</div>

</html>