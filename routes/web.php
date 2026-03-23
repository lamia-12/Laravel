<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Nova ruta za blog
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pozdrav/{ime}', function ($ime) {
    return 'Pozdrav, ' . $ime . '! Dobrodošli u Laravel.';
});

Route::get('/api/automobili', function () {
    return response()->json([
        [
            'id'      => 1,
            'marka'   => 'Volkswagen',
            'model'   => 'Golf',
            'godina'  => 2022,
        ],
        [
            'id'      => 2,
            'marka'   => 'Toyota',
            'model'   => 'Corolla',
            'godina'  => 2021,
        ],
        [
            'id'      => 3,
            'marka'   => 'BMW',
            'model'   => '3 Series',
            'godina'  => 2023,
        ],
    ]);
});


Route::get('/skola', function () {
    return view('skola', [
        'ime_skole' => 'Tehnička škola Ruđer Bošković',
        'predmeti'  => [
            'Baze podataka',
            'Web dizajn',
            'Programiranje',
            'Mrežne tehnologije',
        ],
    ]);
});


Route::get('/clanak', function () {
    return view('clanak', [
        'naslov'     => 'Uvod u Laravel',
        'sadrzaj'    => 'Laravel je najpopularniji PHP framework...',
        'objavljen'  => true,
        'komentara'  => 0,
        'autor'      => 'Ana Horvat',
    ]);
});

Route::get('/blog', function () {
    $clanci = [
        ['id' => 1, 'naslov' => 'Uvod u Laravel',   'kategorija' => 'PHP',    'ocjena' => 5],
        ['id' => 2, 'naslov' => 'Baze podataka',     'kategorija' => 'SQL',    'ocjena' => 4],
        ['id' => 3, 'naslov' => 'Blade templating',  'kategorija' => 'PHP',    'ocjena' => 5],
        ['id' => 4, 'naslov' => 'CSS Grid',          'kategorija' => 'CSS',    'ocjena' => 3],
        ['id' => 5, 'naslov' => 'JavaScript osnove', 'kategorija' => 'JS',     'ocjena' => 4],
    ];

    return view('blog', compact('clanci'));
    // compact('clanci') == ['clanci' => $clanci]
});

Route::get('/o-nama', function () {
    return view('o-nama', [
        'tim' => [
            ['ime' => 'Ana Horvat',  'uloga' => 'Voditeljica projekta'],
            ['ime' => 'Marko Babić', 'uloga' => 'Backend developer'],
            ['ime' => 'Petra Kovač', 'uloga' => 'Frontend developer'],
        ]
    ]);
});

Route::get('/automobili', function () {
    $automobili = [
        ['id'=>1,'marka'=>'VW','model'=>'Golf','godina'=>2022],
        ['id'=>2,'marka'=>'Toyota','model'=>'Corolla','godina'=>2021],
        ['id'=>3,'marka'=>'BMW','model'=>'3 Series','godina'=>2023],
    ];
    return view('automobili', compact('automobili'));
});

Route::get('/studenti', function () {
    $studenti = [
        ['ime'=>'Ana Horvat', 'smjer'=>'Informatika', 'polozio'=>true],
        ['ime'=>'Marko Babić','smjer'=>'Elektrotehnika','polozio'=>false],
        ['ime'=>'Petra Kovač','smjer'=>'Strojarstvo', 'polozio'=>true],
        ['ime'=>'Ivan Perić', 'smjer'=>'Informatika', 'polozio'=>true],
    ];
    return view('studenti', compact('studenti'));
});

Route::get('/kontakt', function () {
    return view('kontakt');
});