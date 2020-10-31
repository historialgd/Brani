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
            <div class="head">
                <nav>
                    <ul class="navlink">
                        <li name="test"><a href="#about">About</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="">Bantuan</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    <div class="content" style="height:100%:">
        <p>
            <form  action="/Pages/loggedinweb.php" method="POST" style="color:white;">
                <b>Nama</b><br>
                <input type="text" id="nama" placeholder="Masukkan Nama" name="nama" required autocomplete="off">
                <br><br>
                <b>Password</b><br>
                <input type="password" id="pw" placeholder="Masukkan Password" name="pw" required>
                <br>
                <button type="submit" class="login">Login</button>
            </form><br>
            <a href ="daftarweb.html">Belum Punya akun? Daftar Sekarang!</a>
        </p>
    </div>
    </body>
</html>