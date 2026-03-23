<!-- 
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moj Blog</title>
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

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Naslov</th>
            <th>Kategorija</th>
            <th>Ocjena</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clanci as $clanak)
            {{-- Svaki drugi red ima drugu boju (striped efekt) --}}
            <tr class="{{ $loop->even ? 'table-light' : '' }}">
                <td>{{ $loop->iteration }}</td>
                <td>
                    {{ $clanak['naslov'] }}
                    @if($loop->first)
                        <span class="badge bg-warning ms-1">Novo!</span>
                    @endif
                </td>
                <td>{{ $clanak['kategorija'] }}</td>
                <td>
                    @for($i = 1; $i <= 5; $i++)
                        {{ $i <= $clanak['ocjena'] ? '⭐' : '☆' }}
                    @endfor
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">Ukupno: {{ $loop->count ?? count($clanci) }} članaka</td>
        </tr>
    </tfoot>
</table>
-->






@extends('layouts.app')

@section('title', 'Blog članci')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>📰 Blog članci</h1>
        <span class="badge bg-danger fs-6">{{ count($clanci) }} članaka</span>
    </div>

    @forelse($clanci as $clanak)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{ $loop->iteration }}. {{ $clanak['naslov'] }}</h5>
                    <span class="badge bg-secondary">{{ $clanak['kategorija'] }}</span>
                </div>
                <div class="mt-2">
                    @for($i = 1; $i <= 5; $i++)
                        {{ $i <= $clanak['ocjena'] ? '⭐' : '☆' }}
                    @endfor
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning">Nema objavljenih članaka.</div>
    @endforelse
@endsection

@extends('layouts.app')

@section('title', 'Blog članci')

@section('content')
    <h1 class="mb-4">Blog članci</h1>

    @forelse($clanci as $clanak)
        {{-- Umjesto card HTML-a ovdje, uključujemo partial i proslijeđujemo varijablu --}}
        @include('partials._clanak-kartica', ['clanak' => $clanak])
    @empty
        <div class="alert alert-warning">Nema objavljenih članaka.</div>
    @endforelse
@endsection