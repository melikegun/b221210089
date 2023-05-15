<?php
// Login sayfası
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adı ve şifre alanının boş geçilmemesi kontrolü
    if (empty($username) || empty($password)) {
        header("Location: login.php"); // Kullanıcı login sayfasına yönlendirme
        exit;
    }

    // Kullanıcı adının mail adresi olup olmadığının kontrolü
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php"); // Kullanıcı login sayfasına yönlendirme
        exit;
    }

    // Kullanıcı adı ve şifre kontrolü
    $studentNumber = substr($username, 0, strpos($username, "@")); // Öğrenci numarasını çıkarma
    $expectedPassword = "b" . $studentNumber; // Şifre kontrolü

    if ($password == $expectedPassword) {
        // Login işlemi başarılı
        echo "Hoşgeldiniz " . $studentNumber; // Başarılı mesajı
    } else {
        header("Location: login.php"); // Kullanıcı login sayfasına yönlendirme
        exit;
    }
}
?>