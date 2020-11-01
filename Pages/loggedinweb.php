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
                <a href="/">BRANI</a>
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
                            $count = mysqli_num_rows($result);
                            if ($count == 1){
                                $_SESSION['nama'] = $nama;
                                $_SESSION['pw'] = $pw;
                            }else{
                                header('Location: loginwebgagal.php');
                                }
                            }
                            if(isset($_SESSION['nama'])){
                                $nama = $_SESSION['nama'];
                                echo "<a href='profileweb.php'>".$nama."</a>";
                            }
                        ?>
              <div class="login-button">
                <a href="logout.php">Logout</a>
              </div>
            </div>
        </header>
        <button onclick="topFunction()" id="myBtn" title="Kembali ke atas"><i class="fas fa-angle-double-up"></i></button>
        <script src="/Scripts/scrollup.js"></script>
        <div class="content">
            <div class="welcome" style="text-align:center; font-size:50px;">
            </div>
            <div class="wel_text">
                <p class="welcome" style="font-size: 50px; font-weight: bold;">Selamat Datang</p>
                <p style="margin-top: 3%;">Punya barang rusak?<br>
                Perbaiki sekarang!
                <br></p>
            </div>
            <div class="sb">
                <form>
                    <input type="search" placeholder="Coba telusuri 'Service AC'">
                    <button class="bsb" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <br>
        </div>
        <div class="faq" id="faq">
            <h1>FAQ</h1>
            <br>
            <h2>Program apa ini?</h2>
            <p style="margin-top: 2%;">
                Program ini memudahkan para client untuk menemukan 'Tukang Reparasi' atau 'Tukang Service' yang sesuai dengan kebutuhan dan lokasi client
            </p>
            <h2 style="margin-top: 3%;">
                Bagaimana cara kerjanya?
            </h2>
            <p style="margin-top: 2%;">
                Client akan menemukan 'Tukang' yang sesuai lalu permintaan client akan masuk ke dalam antrean 'Tukang' jika sudah diterima oleh 'Tukang'
            </p>
            <h2 style="margin-top: 3%;">
                Bagaimana proses pembayarannya?
            </h2>
            <p style="margin-top: 2%;">
                Proses pembayaran terjadi ketika 'Tukang' telah sampai ke lokasi client. Harga ditentukan oleh 'Tukang' sepenuhnya.
            </p>
            <h2 style="margin-top: 3%;">
                Apakah client bisa membatalkan transaksinya?
            </h2>
            <p style="margin-top: 2%;">
                Bisa selagi projek dari Client bukan bagian dari Antrean Utama 'Tukang'. Proses Transaksi akan dibatalkan otomatis ketika 'Tukang' tak menerima projek dari Client dalam waktu 2 hari.
            </p>
            <h2 style="margin-top: 3%;">
                Apa itu Antrean Utama?
            </h2>
            <p style="margin-top: 2%;">
                Antrean Utama adalah antrean yang sedang dikerjakan oleh 'Tukang'
            </p>
        </div>
        <div class="about" id="about">
            <h1>About</h1>
            <br>
            <p>
                G ada otak creatornya ajg
            </p>
        </div>
        </div>
        <div class="footer">
            <p>This fkin website made with ❤️ by @historialgd</p>
        </div>
    </body>
</html>