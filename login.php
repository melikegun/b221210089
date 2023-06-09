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
                            <li><a href="index.html">Hakkımda</a></li>
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
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

            </div>
        
        </nav>
        
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $username = test_input($_POST["username"]);
            $password = test_input($_POST["password"]);
            
            if ($username == "b221210089@sakarya.edu.tr" && $password == "b221210089") 
            {
                echo "<h2 class='welcome-message'>Hoşgeldiniz \"$password\"</h2>";
            } 

            else 
            {
                echo "<h2 class='welcome-message'>Giriş başarısız. Lütfen tekrar deneyin.</h2>";
      
            }
        }
        
        function test_input($veri) 
        {
            $veri = trim($veri);
            $veri = stripslashes($veri);
            $veri = htmlspecialchars($veri);
            
            return $veri;
        }
        
        ?>
        
    
    </body>   
    </html>
