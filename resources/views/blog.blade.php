<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moj Blog</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-danger">
    <div class="container">
        <span class="navbar-brand">Moj Laravel Blog</span>
    </div>
</nav>

<div class="container mt-4">
    <h1>Dobrodošli na blog!</h1>
    <p class="lead">Ovo je moja prva Laravel stranica.</p>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<div class="container mt-4">
    <h1>Blog članci</h1>

    <div class="row">
        @foreach($clanci as $clanak)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">{{ $clanak['kategorija'] }}</span>
                        <h5 class="card-title">{{ $clanak['naslov'] }}</h5>
                        <p class="card-text">Redni broj: {{ $loop->iteration }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>