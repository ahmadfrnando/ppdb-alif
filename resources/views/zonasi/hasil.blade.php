<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Zonasi</title>
</head>
<body>
    <h1>Hasil Zonasi</h1>
    <p>Status: {{ $status }}</p>
    <p>{{ $message }}</p>
    <p>Jarak ke sekolah: {{ number_format($distance, 2) }} km</p>
</body>
</html>
