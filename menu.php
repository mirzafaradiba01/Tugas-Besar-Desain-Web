<?php
require 'functions.php';
$ice=query("SELECT * FROM menu");
if(isset($_POST["cari"])){
    $ice=cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cill's Ice</title>
    <link rel="stylesheet" type="text/css" href="styleTugas.css">
</head>
</head>
<header>
        <div id="logo">ICE<a id="logo1">CREAM</a></div>
        <span class="p1"><a href="home.php" class="p2">Home</a></span>
        <span class="p1"><a href="about.php" class="p2">About</a></span>
        <span class="p1"><a href="menu.html" class="p2">Menu</a></span>
        <!-- <span class="p1"><a href="order.php" class="p2">Order</a></span> -->
        <span class="p1">
            <form action="" method="post">
                <input class="search" type="text" name="keyword" autofocus placeholder="search" autocomplete="off">
                <button class="btnsearch-1" type="submit" name="cari">cari</button>
            </form>
        </span>
        
    </header>
<body>
    <div class="menu1">
    <table border="1">
        <tr>
            <th colspan="5" class="daftar"><span>Daftar Menu</span>
            <a class="tmbh" href="tambah-data.php">Tambah Menu</a>
            <a class="btn-kembali"href="menu.php">Kembali</a></th>
           
        </tr>
        <tr class="dftrmenu">
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1?>
        <?php foreach ($ice as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td> <span>Rp </span><?= $row["harga"]; ?></td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" alt="" width="200px" height="200px" srcset=""></td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>