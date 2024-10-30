<?php

use App\Models\Jobs;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Jobs::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Jobs::find($id),
    ]);
});

Route::get('/contacts', function () {
    return view('contacts');
});
