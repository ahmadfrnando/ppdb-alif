<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Lokasi Anda</title>
</head>
<body>
    <h1>Masukkan Alamat</h1>
    <form action="{{ route('zonasi.proses') }}" method="POST">
        @csrf
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
        <button type="submit">Proses Lokasi</button>
    </form>
</body>
</html>
