<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styleTugas.css">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="User" placeholder="Username" class="control-input">
            <input type="password" name="pass" placeholder="Password" class="control-input"> 
            <br><br>
            <input type="submit" name="submit" placeholder="Login" class="btn-login">
        </form>
        <?php
           if(isset($_POST['submit'])){
                session_start();
                include 'functions.php';

                $User = $_POST['User'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$User."' AND password = '".($pass)."'" );
                if(mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    // $_SESSION['id'] = $d ->id_admin;
                    echo '<script>window.location="home.php"</script>';
                }else{
                    echo '<script>alert("Username atau Password Anda salah")</script>';
                }
           }  
        ?>
    </div>
</body>
</html>