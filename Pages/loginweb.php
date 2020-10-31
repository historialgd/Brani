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
        <form  action="/Pages/loggedinweb.php" method="POST">
            <label for="nama"><b>Nama</b></label>
            <input type="text" id="nama" placeholder="Masukkan Nama" name="nama" required autocomplete="off">
            <br>
            <label for="psw"><b>Password</b></label>
            <input type="password" id="pw" placeholder="Masukkan Password" name="pw" required>
            <br>
            <button type="submit" class="login">Login</button>
        </form>
    </div>
    </body>
</html>