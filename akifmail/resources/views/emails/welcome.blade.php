<!DOCTYPE html>
<html>
<head>
    <title>Yeni Mesaj Var!</title>
</head>
<body>
    <h1>İletişim Formu Mesajı</h1>
    <p><strong>Ad Soyad:</strong> {{ $data['name'] }} {{ $data['surname'] }}</p>
    <p><strong>E-Posta:</strong> {{ $data['email'] }}</p>
    <p><strong>Mesaj:</strong> {{ $data['message'] }}</p>
</body>
</html>
