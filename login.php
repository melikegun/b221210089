<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <title>WEB PROJE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body id="arkaplanresim">
        
        <nav class="navbar navbar-inverse">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">B221210089</a>
                </div>
                
                <ul class="nav navbar-nav">
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> BİLGİLER <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="hakkimda.html">Hakkımda</a></li>
                            <li><a href="ilgialani.html">İlgi Alanlarım</a></li>
                            <li><a href="hobiler.html">Hobilerim</a></li>
                        </ul>
                    </li>

                    <li><a href="cv.html">EĞİTİM</a></li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> ŞEHRİM <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="sehrim.html">İSTANBUL</a></li>
                            <li><a href="gezilecekyerler.html">GEZİLECEK YERLER</a></li>
                            <li><a href="mirasimiz.html">MİRASIMIZ</a></li>
                        </ul>
                    </li>

                    <li><a href="iletisim.html">İletişim</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

            </div>

        </nav>
        
        
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kullanıcı adı ve şifre alınır
        $kullaniciAdi = test_input($_POST["kullaniciAdi"]);
        $sifre = test_input($_POST["sifre"]);

        // Kullanıcı adı ve şifre kontrol edilir
        if ($kullaniciAdi == "b221210089@sakarya.edu.tr" && $sifre == "b221210089") {
            echo "Hoşgeldiniz: " . $sifre;
            // Burada giriş işlemi başarılı olduğunda yapılacak işlemleri gerçekleştirebilirsiniz.
        } else {
            echo "Giriş başarısız. Lütfen tekrar deneyin.";
            // Giriş başarısız olduğunda kullanıcıyı giriş sayfasına yönlendirebilirsiniz.
        }
    }

    // Form verilerini düzgünleştirir ve güvenli hale getirir
    function test_input($veri) {
        $veri = trim($veri);
        $veri = stripslashes($veri);
        $veri = htmlspecialchars($veri);
        return $veri;
    }
    ?>

    <h2>Öğrenci Girişi</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="kullaniciAdi">Kullanıcı Adı:</label>
        <input type="text" name="kullaniciAdi" required>
        <br><br>
        <label for="sifre">Şifre:</label>
        <input type="password" name="sifre" required>
        <br><br>
        <input type="submit" value="Giriş">
    </form>

</body>
</html>
