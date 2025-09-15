<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Captain',
                'salary' => '1 willion doubloons',
            ],
            [
                'id' => 2,
                'title' => 'bilge rat',
                'salary' => '1 dolar',
            ],
            [
                'id' => 3,
                'title' => 'Landlubber',
                'salary' => '0 riches, 0 glory, no treasure😡😡😡😡😡',
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs =  [
        [
            'id' => 1,
            'title' => 'Captain',
            'salary' => '1 willion doubloons',
        ],
        [
            'id' => 2,
            'title' => 'bilge rat',
            'salary' => '1 dolar',
        ],
        [
            'id' => 3,
            'title' => 'Landlubber',
            'salary' => '0 riches, 0 glory, no treasure😡😡😡😡😡',
        ]
    ];
    
   $job = Arr::first($jobs, fn($job) => $job ['id'] == $id); 
        

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
