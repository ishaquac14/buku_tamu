<!DOCTYPE html>
<html>
<head>
    <title>Guest Details PDF</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            flex: 1;
        }
        .footer {
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa; 
            padding: 10px 0;
        }
        .footer p {
            margin: 0;
            line-height: 1.5; 
        }
        .content {
            margin: 20px 0;
        }
        .content p {
            margin: 5px 0;
        }
        .image {
            text-align: center;
        }
        .image img {
            max-width: 320px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header text-center mb-4">
            <h4>Guest Details</h4>
        </div>
        <div class="content">
            <p><strong>NIK:</strong> {{ $guest->nik }}</p>
            <p><strong>Nama Lengkap:</strong> {{ $guest->nama }}</p>
            <p><strong>Asal Perusahaan:</strong> {{ $guest->asal_perusahaan }}</p>
            <p><strong>No Handphone:</strong> {{ $guest->no_hp_tamu }}</p>
            <p><strong>PIC:</strong> {{ optional($guest->user)->full_name }}</p>
            <p><strong>Departemen:</strong> {{ $guest->departemen }}</p>
            <p><strong>Tujuan Lokasi:</strong> {{ $guest->tujuan_lokasi }}</p>
            <p><strong>Kartu:</strong> {{ $guest->kartu }}</p>
            <p><strong>Tujuan:</strong> {{ $guest->tujuan }}</p>
            <div class="image mt-4">
                <p><strong>Image :</strong></p>
                <img class="mt-4" src="{{ $guest->image }}" alt="Guest Image">
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} IT Development</p>
        <p>PT Aisin Indonesia Automotive</p>
    </div>
</body>
</html>
