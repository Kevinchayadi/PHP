<!DOCTYPE html>
<html>
<head>
    <title>Pesan Kontak</title>
</head>
<body>
    <h2>Pesan dari Form Kontak</h2>
    <p><strong>Nama Depan:</strong> {{ $data['first_name'] }}</p>
    <p><strong>Nama Belakang:</strong> {{ $data['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>No. Telepon:</strong> {{ $data['phone'] }}</p>
    <p><strong>Judul:</strong> {{ $data['subject'] }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
