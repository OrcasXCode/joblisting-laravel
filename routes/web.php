<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobs = Job::all();
    
    dd($jobs[0]->title);
    
    // return view('home');
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});