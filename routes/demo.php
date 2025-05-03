

// namespace App\Models;

// class Job {
//     public static function all()
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '$50,000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                 'salary' => '$10,000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                 'salary' => '$40,000'
//             ]
//         ];
//     }
// }

// $jobs = [
//     [
//         'id' => 1,
//         'title' => 'Director',
//         'salary' => '$50,000'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Programmer',
//         'salary' => '$10,000'
//     ],
//     [
//         'id' => 3,
//         'title' => 'Teacher',
//         'salary' => '$40,000'
//     ]
// ];

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/about', function () {
//     return view('about');
// });


//wildcard
// Route::get('jobs/{id}', function ($id) {
//     $job = collect(Job::all())->firstWhere('id', $id);

//     if (!$job) {
//         abort(404);
//     }

//     return view('job', ['job' => $job]);
// });

// Route::get('/jobs', function () {
//     return view('jobs', ['jobs' => Job::all()]);
// });

