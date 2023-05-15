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
        
        
        <form action="login.php" method="post">
            Kullanıcı Adı:<br>
            <input type="text" name="kullanici"  placeholder="Kullanıcı Adınızı Girin…"><br>
            Şifre:<br>
            <input type="password" name="sifre"  placeholder="Şifrenzizi Girin…">
            <input type="submit" value="GÖNDER">
        </form>

    </body>

    </html>


<?php

 if (isset($_POST['kullanici'], $_POST['sifre'] ) && ($_POST['kullanici']!='b221210089@sakarya.edu.tr') && ($_POST['sifre']!='b221210089')) 
    {
      echo "Kayıt İşleminiz Yapıldı...";
      echo "<b>".$_POST['adi'] . ' ' . $_POST['soyadi']."</b>";
    }
    else
    {
       echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın. <br> Eksik Bilgi Girdiniz...";
    }

echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>