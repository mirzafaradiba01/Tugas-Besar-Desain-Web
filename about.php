<!DOCTYPE html>
<html>

<head>
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
        <!-- <span class="p1"><a href="order.php" class="p2">Order</a></span> -->
    </header>

    <div class="page-2">
        <div class="img">
            <img src="img/logo1.png">
        </div>
        <div class="teks1">
            <h2>HOLAAA.......</h2>
            <br>
            <p>Selamat datang di Kedai Cill's Ice Cream</p>
            <p>Silahkan pilih Ice Cream sesaui dengan selera anda</p>
            <p>Selamat Menikmati</p>
        </div>
        <div class="teks2">
            <h4>---------Mengapa Harus Cill's Ice Cream---------</h4>
            <p>Kenyamanan Pelanggan Adalah Hal Yang Utama. Pengiriman di hari yang sama.</p>
            <p>Rasa yang tidak pernah bohong, lezat dan nikmat manis nyaaa sangat pas >3</p>


           
        <div class="teks3">
            <img class="icon-1" src="img/gif.gif">
            <a href="#cp" id="button-contact"><button>
                    <h3>Contact Us</h3>
                </button></a>
            <br>
            <div id="wa" style="display: none;">
                <a name="cp">
                    <p>
                    <img class="icon-2" src="img/wa.png"></p>
                    <a href="https://wa.me/qr/XG6REIZEICNFD1" target="_blank">WhatsApp</a>
                    <p>Only WhatsApp</p>
                    <img class="icon-2" src="img/Toko.png" alt=""> 
                       <p>Jl. Kita Masih Panjang, Semangat 0703 </p>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("cp").hover(function () {
                $(this).find("teks3").slideToggle("fast");
            });

            var isVisible = false;
            $("#button-contact").click(function() {
                if (!isVisible) {
                    $("#wa").show();
                    isVisible = true;
                } else {
                    $("#wa").hide();
                    isVisible = false;
                }
            });
        });
    </script>
</body>

</html>