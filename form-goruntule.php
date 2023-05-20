<?php
// Diğer işlemler veya veritabanı bağlantısı gibi kodlar...

// Form verilerini işleme kodları...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini alın
    $isim = $_POST["isim"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];
    $numara = $_POST["numara"];
    $cinsiyet = $_POST["cinsiyet"];
    $tarih = $_POST["tarih"];
    $sehir = $_POST["sehir"];

    // Veritabanı bağlantısı yapılabilir
    $servername = "localhost";
    $username = "kullanici_adi";
    $password = "sifre";
    $dbname = "veritabani_adi";

    // Veritabanı bağlantısını oluştur
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Veritabanı bağlantısını kontrol et
    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız oldu: " . $conn->connect_error);
    }

    // SQL sorgusunu hazırla
    $sql = "INSERT INTO form_tablosu (isim, soyad, email, mesaj, numara, cinsiyet, tarih, sehir)
            VALUES ('$isim', '$soyad', '$email', '$mesaj', '$numara', '$cinsiyet', '$tarih', '$sehir')";

    // SQL sorgusunu çalıştır
    if ($conn->query($sql) === TRUE) {
        // Başarılı bir şekilde kaydedildiyse yönlendirme yapabilirsiniz
        header("Location: form-goruntule.php");
        exit;
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    // Veritabanı bağlantısını kapat
    $conn->close();
}
?>

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
                            <li><a href="#">Hakkımda</a></li>
                            <li><a href="ilgialani.html">İlgi Alanlarım</a></li>
                        </ul>
                    </li>

                    <li><a href="cv.html">EĞİTİM</a></li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> ŞEHRİM <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="sehrim.html">İstanbul</a></li>
                            <li><a href="gezilecekyerler.html">Gezilecek Yerler</a></li>
                            <li><a href="mirasimiz.html">Mirasımız</a></li>
                        </ul>
                    </li>

                    <li><a href="iletisim.html">İLETİŞİM</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

            </div>

        </nav>

  
        <h2>Gönderilen Bilgiler</h2>
 
        <p><strong>İsim:</strong> <?php echo isset($_POST['isim']) ? $_POST['isim'] : ''; ?></p>
 
        <p><strong>Soyad:</strong> <?php echo isset($_POST['soyad']) ? $_POST['soyad'] : ''; ?></p>
 
        <p><strong>E-posta:</strong> <?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?></p>
 
        <p><strong>Mesaj:</strong> <?php echo isset($_POST['mesaj']) ? $_POST['mesaj'] : ''; ?></p>
 
        <p><strong>Telefon:</strong> <?php echo isset($_POST['numara']) ? $_POST['numara'] : ''; ?></p>
 
        <p><strong>Cinsiyet:</strong> <?php echo isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : ''; ?></p>
 
        <p><strong>Doğum Tarihi:</strong> <?php echo isset($_POST['tarih']) ? $_POST['tarih'] : ''; ?></p>
  
        <p><strong>Şehir:</strong> <?php echo isset($_POST['sehir']) ? $_POST['sehir'] : ''; ?></p>
  
        <a href="javascript:history.back()">Geri Dön</a>

      </body>
</html>
