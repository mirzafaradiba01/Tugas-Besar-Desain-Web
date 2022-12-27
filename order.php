<?php
require 'functions.php';

if(isset ($_POST['submit'])){
    if(order($_POST)>0){
        echo"
    <script>
        document.location.href='order.php';
    </script>
    ";
    }else{
    echo"
    <script>
        document.location.href='order.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
    }
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
<body>
    <header>
        <div id="logo">ICE<a id="logo1">CREAM</a></div>
        <span class="p1"><a href="login.php" class="p2">Logout</a></span>
        <span class="p1"><a href="home.php" class="p2">Home</a></span>
        <span class="p1"><a href="about.php" class="p2">About</a></span>
        <span class="p1"><a href="menu.html" class="p2">Menu</a></span>
        <span class="p1"><a href="order.php" class="p2">Order</a></span>
    </header>

    <section class="order">
    <form name="form" onchange="tampilMenu()" method="post">
        <div class="buy" id="buy">

            <center>
                <h2 id="title"> Cill's Ice Cream </h2>
            </center>
            <div class="order-1" id="main">
                <div>
                    <label>Nama Pelanggan:</label><br>
                    <input type="text" name="namapelanggan" id="nama pelanggan" /><br>
                </div>


                <div>
                    <label>Pilih Menu Varian:</label><br>

                    <select name="PilihMenu" id="pilih menu">
                        <option name="PilihMenu" value="Gelato Vanilla">Gelato Vanilla</option>
                        <option name="PilihMenu" value="Gelato Taro">Gelato Taro</option>
                        <option value="Gelato Chocolate">Gelato Chocolate</option>
                        <option value="Gelato Strawberry">Gelato Strawberry</option>
                        <option value="Gelato Matcha">Gelato Matcha</option>
                        <option value="Gelato Oreo">Gelato Oreo</option>
                        <option value="Gelato Coffe">Gelato Coffe</option>
                        <option value="Gelato Peanut">Gelato Peanut</option>
                        <option value="Gelato CookiesCream">Gelato CookiesCream</option>
                        <option value="Gelato Blueberry">Gelato Blueberry</option>
                        <option value="Gelato Blue Moon">Gelato Blue Moon</option>
                        <option value="Vanilla Stick">Vanilla Stick</option>
                        <option value="Chocolate Stick">Chocolate Stick</option>
                        <option value="Strawberry Stick">Strawberry Stick</option>
                        <option value="Matcha Stick">Matcha Stick</option>
                        <option value="Vanilla Cone">Vanilla Cone</option>
                        <option value="Chocolate Cone">Chocolate Cone</option>
                        <option value="Strawberry Cone">Strawberry Cone</option>
                        <option value="Matcha Cone">Matcha Cone</option>
                        <option value="Blueberry Cone">Blueberry Cone</option>
                        <option value="Blue Moon Cone">Blue Moon Cone</option>

                    </select>
                </div>
                <div>
                    <label>Harga :</label><br>
                    <input type="text" name="hargamenu" id="harga" />
                </div>
                <div>
                    <label>Jumlah Pesanan:</label><br>
                    <input type="text" name="jumlahpesanan" id="jumlah pesanan"/>
                </div>
                <div>
                    <label>Total Pesanan:</label><br>
                    <textarea name="totalp" id="total pesanan" ></textarea><br>
                </div>

                <div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>


            </div>


        </div>
    </form>
    </section>

    <script>
        let count = 0;
        function buy() {

            console.log("count " + count)
            if (count % 2 == 0) {
                document.getElementById("buy").style.display = "block";
            } else {
                document.getElementById("buy").style.display = "none";
            }
            count++;
        }
    </script>
    <script>
        var items = document.querySelectorAll("nav-items");
        for (var i = 0; i < items.length; i++) {
            items[i].addEventListener("click", function () {
                this.classList.add("active");
            })
        }
        function tampilMenu() {
            var hrg = (document.form.PilihMenu.value);
            var jmlpesanan = parseFloat(document.form.jumlahpesanan.value);
            var ht = 0;
            var sub = 0;

            if (hrg == "Gelato Vanilla") {

                ht = 20000;
            }
            else if (hrg == "Gelato Taro") {
                ht = 30000;
            }
            else if (hrg == "Gelato Chocolate") {
                ht = 25000;
            }
            else if (hrg == "Gelato Strawberry") {
                ht = 25000;
            }
            else if (hrg == "Gelato Matcha") {
                ht = 30000;
            }
            else if (hrg == "Gelato Oreo") {
                ht = 30000;
            }
            else if (hrg == "Gelato Coffe") {
                ht = 28000;
            }
            else if (hrg == "Gelato Peanut") {
                ht = 27000;
            }
            else if (hrg == "Gelato CookiesCream") {
                ht = 28000;
            }
            else if (hrg == "Gelato Blueberry") {
                ht = 25000;
            }
            else if (hrg == "Gelato Blue Moon") {
                ht = 30000;
            }
            else if (hrg == "Vanilla Stick") {
                ht = 22000;
            }
            else if (hrg == "Chocolate Stick") {
                ht = 20000;
            }
            else if (hrg == "Strawberry Stick") {
                ht = 20000;
            }
            else if (hrg == "Matcha Stick") {
                ht = 25000;
            }
            else if (hrg == "Vanilla Cone") {
                ht = 25000;
            }
            else if (hrg == "Chocolate Cone") {
                ht = 25000;
            }
            else if (hrg == "Strawberry Cone") {
                ht = 25000;
            }
            else if (hrg == "Matcha Cone") {
                ht = 27000;
            }
            else if (hrg == "Blueberry Cone") {
                ht = 25000;
            }
            else if(hrg == "Blue Moon Cone")
            {
                ht = 28000;
            }

            jmlpesanan = jmlpesanan || 0

            sub = jmlpesanan * ht;

            document.form.hargamenu.value = eval(ht);
            document.form.totalp.value = eval(sub);
        }

    </script>
</div>
</body>
</html>