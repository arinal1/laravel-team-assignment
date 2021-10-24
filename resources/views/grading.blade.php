<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tugas 3 - Tim 1</title>
    <link href="https://ol.binus.ac.id/images/favicon.ico" rel="Shortcut Icon" type="image/png" media="screen">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg opaque-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://ol.binus.ac.id/images/logo.png" alt="logo">
            </a>
        </div>
    </nav>
    <div class="container content">
        <div class="card">
            <form action="./grading" method="POST">
                @csrf
                <div class="card-header">Konversi Nilai</div>
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nilai Kuis</label>
                            <input class="form-control" name="quiz" type="number" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nilai Tugas</label>
                            <input class="form-control" name="assignment" type="number" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nilai Absensi</label>
                            <input class="form-control" name="attendance" type="number" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nilai Praktik</label>
                            <input class="form-control" name="practice" type="number" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nilai UAS</label>
                            <input class="form-control" name="final" type="number" min="0" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button onclick="resetAllForm()" class="btn btn-secondary" id="btn-reset"
                            type="button">Reset</button>
                        <button type="submit" class="btn btn-primary" id="submit" disabled>Hitung Nilai</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($result != null && $result['success'])
        <div class="modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hasil Konversi Nilai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Rata-rata nilai anda adalah <b>{{ $result['data']['scoreAverage'] }}</b>, grade anda adalah
                            <b>{{ $result['data']['scoreGrade'] }}</b>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
    @if ($result != null && $result['success'])
        <script>
            bootstrap.Modal.getOrCreateInstance($(".modal")).show();
        </script>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
