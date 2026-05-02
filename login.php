<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Login - Sakarya Üniversitesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 card p-4 shadow">
            <h2 class="text-center mb-4">Giriş Yap</h2>
            
            <!-- Hata mesajı: islem.php'den hatalı dönülürse görünür -->
            <?php if(isset($_GET['hata'])): ?>
                <div class="alert alert-danger">Kullanıcı adı veya şifre hatalı!</div>
            <?php endif; ?>

            <form action="islem.php" method="POST">
                <input type="text" name="kullanici" class="form-control mb-2" placeholder="b211210001@sakarya.edu.tr" required>
                <input type="password" name="sifre" class="form-control mb-2" placeholder="Öğrenci Numarası" required>
                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>