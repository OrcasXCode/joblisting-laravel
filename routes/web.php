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


Route::get('/jobs/create',function(){
    return view('jobs.create');
});



Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    // dd("Hello from the post route");
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required','min:3']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/jobs', function () {
    //Eager Loading : Minimize the number of SQL queries
    // return view('jobs', ['jobs' => Job::with('employer')->get()]);
    return view('jobs.index', ['jobs' => Job::with('employer')->paginate(3)]);
    // return view('jobs', ['jobs' => Job::all()]);
});

