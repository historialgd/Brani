<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>CaTech</title>
        <link rel="stylesheet" href="/Styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/0ebf56afd6.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="headkiri">
                <a href="loggedinweb.php">BRANI</a>
                <div class="search-box">
                    <form class="head" action="">
                        <input type="text" placeholder="Cari barang..." />
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="headkanan">
                <a href="#about">About</a>
                <a href="#faq">FAQ</a>
                <a href="#third">Bantuan</a>
                <?php
                    require('connect.php');
                    session_start();
                    if(isset($_POST['nama']) and isset($_POST['pw'])){
                    $nama = $_POST['nama'];
                    $pw = $_POST['pw'];
                    $query = "SELECT * FROM `tb_dataprib` WHERE nama='$nama' and password='$pw'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    $count = mysqli_num_rows($result);}
                    if(isset($_SESSION['nama'])){
                        $nama = $_SESSION['nama'];
                        echo "<a href='profileweb.php'>".$nama."</a>";
                        }
                ?>
            </div>
        </header>
        <div class="content"><br><br>
            <p>Nama :</p><br>
            <p>Nomor Telepon :</p><br>
            <p></p>
        </div>
    </body>
</html>