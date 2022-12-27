<?php
require 'functions.php';

if(isset ($_POST['edit'])){
    if(edit($_POST)>0){
        echo"
    <script>
        document.location.href='menu.php';
    </script>
    ";
    }else{
    echo"
    <script>
        document.location.href='menu.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Menu</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Menu Icecream 
                            <a href="menu.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                        if($_GET['id']){
                            $ice_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM menu WHERE id='$ice_id' ";
                            $query_run = mysqli_query($conn, $query);
                            if(mysqli_num_rows($query_run) > 0){
                                $ice = mysqli_fetch_array($query_run);
                                ?>
                            <form action="" method="POST">
                                <input type="hidden" name="ice_id" value="<?=$ice['id']; ?>">
                                <div class="mb-3">
                                    <label>Nama</label>
                                    <input type="text" name="nama" value="<?= $ice['nama']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Harga</label>
                                    <input type="text" name="harga" value="<?= $ice['harga']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Gambar</label>
                                    <input type="text" name="gambar" value="<?= $ice['gambar']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            <?php
                                }else{
                                    echo "<h4>No Such Id Found</h4>";
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>