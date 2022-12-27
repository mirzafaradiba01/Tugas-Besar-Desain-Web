<?php
$conn=mysqli_connect("localhost","root","","icecream");
if(!$conn){
    die('Koneksi Error : '.mysqli_connect_errno().' - '.mysqli_connect_error());
}
$result=mysqli_query($conn,"SELECT * FROM menu");
function query($query_kedua){
    global $conn;
    $result=mysqli_query($conn,$query_kedua);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama=htmlspecialchars($data["nama"]);
    $harga=htmlspecialchars($data["harga"]);
    $gambar=htmlspecialchars($data["gambar"]);
    $query="INSERT INTO menu VALUES ('', '$nama','$harga','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function order($data){
    global $conn;
    $nama=htmlspecialchars($data["namapelanggan"]);
    $pilihan=htmlspecialchars($data["PilihMenu"]);
    $harga=htmlspecialchars($data["hargamenu"]);
    $jumlah=htmlspecialchars($data["jumlahpesanan"]);
    $total=htmlspecialchars($data["totalp"]);
    $query="INSERT INTO penjualan VALUES ('', '$nama','$pilihan','$harga','$jumlah', '$total')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM menu WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function edit($data){
    global $conn;
    $id=htmlspecialchars($data["ice_id"]);
    $nama=htmlspecialchars($data["nama"]);
    $harga=htmlspecialchars($data["harga"]);
    $gambar=htmlspecialchars($data["gambar"]);
    $query="UPDATE `menu` SET `nama`='$nama',`harga`= '$harga', `gambar`='$gambar' WHERE `id` = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari($keyword)
{
    $sql ="SELECT * FROM menu
    WHERE 
    nama LIKE '%$keyword%' OR
    harga  LIKE '%$keyword%'";

    return query($sql);
}
?>