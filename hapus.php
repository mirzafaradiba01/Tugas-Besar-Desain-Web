<?php
require 'functions.php';

$id=$_GET["id"];

if(hapus ($id)>0){
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
?>