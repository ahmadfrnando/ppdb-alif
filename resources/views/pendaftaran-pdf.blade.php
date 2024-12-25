<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
      /* Reset default browser styles */
body, h1, h2, p {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Font styling */
body {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
}

/* Container styling */
.form-container {
    max-width: 900px;
    margin: 40px auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

h1 {
    font-size: 24px;
    color: #444;
    text-align: center;
    margin-bottom: 20px;
}

h2 {
    font-size: 20px;
    color: #444;
    margin-bottom: 15px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
}

/* Data section styling */
.data-section {
    margin-bottom: 30px;
}

.data-section p {
    margin: 8px 0;
    font-size: 16px;
}

.data-section p strong {
    color: #555;
}

/* Highlighting section headers */
.data-section h2 {
    color: #007bff;
    font-weight: 600;
}

/* Buttons */
.buttons {
    text-align: center;
}

button {
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
    body {
        font-size: 14px;
    }

    .form-container {
        padding: 20px;
    }

    h1 {
        font-size: 20px;
    }

    h2 {
        font-size: 18px;
    }

    button {
        font-size: 14px;
        padding: 8px 16px;
    }
}

      @media print {
    body {
        margin: 0;
        font-size: 12px;
    }

    .form-container {
        box-shadow: none;
        padding: 10px;
    }
}
@media print {
    button {
        display: none;
    }
}
    </style>
</head>
<body onload="window.print()">
    <div class="form-container">
        <h1>Form Pendaftaran</h1>
        <div class="data-section">
            <h2>Data Siswa</h2>
            <p><strong>Nama Siswa:</strong> {{ $data->nama_siswa }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $data->ttl }}</p>
            <p><strong>Agama:</strong> {{ $data->agama }}</p>
            <p><strong>Warga Negara:</strong> {{ $data->warga_negara }}</p>
            <p><strong>Jumlah Saudara:</strong> {{ $data->jlh_saudara }} </p>
            <p><strong>Anak Ke:</strong>{{ $data->anak_ke}} </p>
        </div>

        <div class="data-section">
            <h2>Data Orang Tua</h2>
            <p><strong>Nama Ayah:</strong> {{ $data->nama_ayah }} </p>
            <p><strong>Pendidikan Ayah:</strong> {{ $data->pendidikan_ayah}} </p>
            <p><strong>Pekerjaan Ayah:</strong> {{ $data->pekerjaan_ayah}} </p>
            <p><strong>Nama Ibu:</strong> {{ $data->nama_ibu}} </p>
            <p><strong>Pendidikan Ibu:</strong> {{ $data->pendidikan_ibu}} </p>
            <p><strong>Pekerjaan Ibu:</strong> {{ $data->pekerjaan_ibu}} </p>
        </div>

        <div class="data-section">
            <h2>Data Wali</h2>
            <p><strong>Nama Wali:</strong> {{ $data->nama_wali}} </p>
            <p><strong>Pendidikan Wali:</strong> {{ $data->pendidikan_wali}} </p>
            <p><strong>Pekerjaan Wali:</strong>  {{ $data->pekerjaan_wali}}</p>
            <p><strong>Alamat:</strong> {{ $data->alamat}} </p>
            <p><strong>No. Telp/HP:</strong> {{ $data->telp}} </p>
            <p><strong>Email:</strong> {{ $data->email}} </p>
        </div>rb
    </div>
</body>
</html>
