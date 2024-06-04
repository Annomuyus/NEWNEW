<?php
include "konek.php";
$view = $conn->query("SELECT * FROM produk");
//Login,register,penjualan,gudang,pembelian
//penjual,pegudang,pembeli
//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bar.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<header>
    Cashiercom
    <a type="button" href="login.php" style="color:white; margin-left:80%; font-size:23px;">Logout</a>
</header>

<body style="margin:0;">

    <div class="sidebar">
        <a style="color:white;" href="penjualan.php">Penjualan</a><br><br>
        <a style="color:blue;" href="barang.php">Gudang</a>
    </div>


    <div class="container">
        <button class="button"><a style="padding:4px" placeholder="Tambah" href="barang_buat.php">Tambah</a></button>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Atribut</th>
            </tr>
            <?php
            while ($row = $view->fetch_array()) { ?>

                <tr>
                    <td><?= $row['id_barang'] ?></td>
                    <td><?= $row['namabarang'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td>
                        <a href="barang_edit.php?id=<?= $row['id_barang'] ?>">Edit</a> | <a
                            href="barang_hapus.php?id=<?= $row['id_barang'] ?> "> Delete</a>
                    </td>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <script>
        function preventBack() { window.history.forward(); }
        setTimeout(preventBack(), 0;);
        window.onunload = function () { null };
    </script>

</body>
<div class="footer">Copyrights</div>

</html>