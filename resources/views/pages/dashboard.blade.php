@extends('layouts.dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kartu Sensor</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .sensor-card {
                flex: 1 0 21%;
                /* Membuat kotak berukuran sama dan mengisi ruang yang tersedia */
                margin: 10px;
                padding: 20px;
                box-sizing: border-box;
                max-width: 300px;
            }

            .sensor-title {
                font-size: 24px;
                margin-bottom: 10px;
                color: #333;
            }

            .sensor-value {
                font-size: 36px;
                font-weight: bold;
                color: #334eff;
            }

            .sensor-description {
                font-size: 16px;
                color: #777;
            }
        </style>
    </head>

    <body>
        <h1>Monitoring Sensor</h1>
        <div class="container d-flex justify-content-center align-items-center flex-wrap vh-100">
            <!-- DHT-11 Card -->
            <div class="card text-center sensor-card">
                <div class="card-body">
                    <h5 class="card-title sensor-title">DHT-11</h5>
                    <p class="card-text sensor-description">Suhu</p>
                    <p class="card-text sensor-value">30°C</p>
                </div>
            </div>

            <div class="card text-center sensor-card">
                <div class="card-body">
                    <h5 class="card-title sensor-title">DHT-11</h5>
                    <p class="card-text sensor-description">Kelembaban</p>
                    <p class="card-text sensor-value">60%</p>
                </div>
            </div>

            <!-- MQ-2 Card -->
            <div class="card text-center sensor-card">
                <div class="card-body">
                    <h5 class="card-title sensor-title">MQ-2</h5>
                    <p class="card-text sensor-description">Konsentrasi Gas</p>
                    <p class="card-text sensor-value">200 ppm</p>
                </div>
            </div>

            <!-- Sensor Hujan Card -->
            <div class="card text-center sensor-card">
                <div class="card-body">
                    <h5 class="card-title sensor-title">Sensor Hujan</h5>
                    <p class="card-text sensor-description">Curah Hujan</p>
                    <p class="card-text sensor-value">50 mm</p>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
