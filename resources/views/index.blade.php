<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <title>Gayatri Beauty</title>
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white shadow-lg fixed-top sticky-top">
        <div class="container">

            <a href="#" class="navbar-brand">Dashboard GayaTri</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1"><small class="small-title"></small>Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1"><small class="small-title"></small>Menu 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1"><small class="small-title"></small>Menu 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1"><small class="small-title"></small>Menu 4</a>
                    </li>
                </ul>
                <div>

                </div>
    </nav>

    <main class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h5 class="card-title">Data Form</h5>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No WhatsApp</th>
                            <th>Keluhan</th>
                            <th>Umur</th>
                            <th>Tanggal Isi Form</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = $data->total() - $data->firstItem() + 1;
                        @endphp
                        @foreach ($data as $dt)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $dt->nama_pasien }}</td>
                            <td>{{ $dt->wa_pasien }}</td>
                            <td>{{ $dt->keluhan_pasien }}</td>
                            <td>{{ $dt->umur_pasien }}</td>
                            <td>{{ $dt->created_at }}</td>
                        </tr>
                        @php
                        $counter--;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="box-form2">
                    <ul class="pagination" style="margin-top: 20px; margin-left: 20px;">
                        <li class="page-item">
                            <a style="color: #00a136;" class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a>
                        </li>
                        <li class="page-item">
                            <a style="color: #00a136;" class="page-link" href="{{ $data->nextPageUrl() }}">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="{{ asset('js/admin.js') }}"></script>
