<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
</head>
<body>
    <h1>İletişim Formu</h1>

    <form action="{{ url('/send-mail/akif965485') }}" method="POST">
        @csrf
        <label for="name">Ad:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="surname">Soyad:</label><br>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="email">E-Posta:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Mesajınız:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Gönder</button>
    </form>
</body>
</html>
