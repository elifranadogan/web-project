<?php
if ($_POST) {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

    // Ödev kuralı: Kullanıcı adı mail, şifre öğrenci no
    // Buradaki numarayı kendi numaranla değiştir
    $ogrenci_no = "b241210064"; 
    $dogru_mail = $ogrenci_no . "@sakarya.edu.tr";

    if ($kullanici == $dogru_mail && $sifre == $ogrenci_no) {
        echo "<h1 style='text-align:center; margin-top:50px;'>Hoşgeldiniz " . $ogrenci_no . "</h1>";
    } else {
        // Hatalıysa login sayfasına hata mesajıyla geri gönder
        header("Location: login.php?hata=1");
        exit();
    }
}
?>