<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'We are looking for a PHP developer to join our team.',
            ],
            [
                'id' => 2,
                'title' => 'Frontend Developer',
                'description' => 'We are looking for a Frontend developer to join our team.',
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'description' => 'We are looking for a Backend developer to join our team.',
            ],
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Job::all(), fn ($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contacts', function () {
    return view('contacts');
});
