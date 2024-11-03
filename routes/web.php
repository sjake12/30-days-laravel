<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', [
        'job' => $job,
    ]);
});

Route::post('/jobs', function (){
    request()->validate([
       'title' => ['required', 'min: 3'],
       'salary' => ['required']
    ]);

   Job::factory()->create([
      'title' => request('title'),
      'salary' => request('salary'),
      'employer_id' => 12,
   ]);

   return redirect('/jobs');
});

Route::get('/contacts', function () {
    return view('contacts');
});
