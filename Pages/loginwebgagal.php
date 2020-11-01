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
              <div class="login-button">
                <a href="Pages/daftarweb.html">Daftar</a>
              </div>
            </div>
        </header>
    <div class="content" style="height:100%:"><br><br><br>
        <p style="color:white;">
            Kombinasi Nama dan Password salah, Mohon Coba lagi<br><br>
            <form  action="/Pages/loggedinweb.php" method="POST" style="color:white;">
                <b>Nama</b><br>
                <input type="text" id="nama" placeholder="Masukkan Nama" name="nama" required autocomplete="off">
                <br><br>
                <b>Password</b><br>
                <input type="password" id="pw" placeholder="Masukkan Password" name="pw" required>
                <br>
                <button type="submit" class="login">Login</button>
            </form>
        </p>
    </div>
    </body>
</html>