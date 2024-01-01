<?php

//use App\CalculateAgeClass;
use App\Models\Post;
use App\Models\Comment;
use App\CalculateAgeClass;
use App\Jobs\TestSendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome',['name'=>'Finn']);
// });

// Route::get('about', function () {
//     return view('about');
// });
//Diplay view program
//Route::get('/post/{id}/{name}/{password}',[PostController::class,'display']);
//Route::view("user","/user");

//Route::get("/post",[PostController::class,"post"]);

//Route::get('/post/{id}',[PostController::class,'index']);
//Route::get('/post/{id}','PostController');
//Route::get('/user','UserController@index');

//Route::resource("User",UserController::class);
//Route::view("UserController","/user");
//Route::get('/user',[UserController::class,'create'])->middleware('check');

// Route::get("/contact",function(){
//     return view('contact');
// });


//For connecting database
// Route::get('/dbcon',function(){
//     return view('dbstudent');
// });



//basic controller
//Route::get('/post', [PostController::class, 'index']);

//Controller for data passing
//Route::get('/post', [PostController::class, 'display']);

//resource controller
//Route::resource('/cars', CarsController::class);
//Route::get('check/{age}', [PostController::class, 'checkAge']);





//query builder
//Route::get('post', [ClientController::class, 'dbOperation']);


//dependency injection
// app()->bind('ageCalculate', function () {
//     return new \App\CalculateAgeClass();
// });

//conatiner practicals of age
// app()->bind('ageCalculate', function () {
//     return new CalculateAgeClass();
// });

// Route::get('/', function (CalculateAgeClass $CalculateAgeClass) {
//     $CalculateAgeClass->provide_birth_year(2000);
//     $age = $CalculateAgeClass->get_age();
//     return $age;
// });


// Route::get('/', function () {
//     dd(app());
// });
//container practical2
// class Stadium
// {
// }
// class Football
// {
//     public function __construct(Stadium $stadium)
//     {
//         $this->stadium = $stadium;
//     }
// }
// class Game
// {
//     public function __construct(Football $football)
//     {
//         $this->football = $football;
//     }
// }
// //using instance
// app()->instance('Game', function () {
//     return 'Instance';
// });
// dd(app());
// dd(resolve('Game'));
// //random
// app()->bind( //singleton
//     'random',
//     function () {
//         return Str::random();
//     }
// );
// dump(app()->make('random'));
// dd(app()->make('random'));

//dependency injection
//Route::get('/posts/{post}', [PostController::class, 'show']);





//eloquent orm
//Route::get('/', [StudentController::class, 'show']);


//Middlware Practicals
// Route::get("dashboard", function () {
//     return view('dashboard');
// })->middleware(['role:admin','auth']);
// Route::get("/", function () {
//     return view('home');
// });

// Route::get("stock", function () {
//     return view('stock');
// });
//Route::get('report', [ReportController::class, 'show']);


//file upload validation
// Route::get('/', [FileController::class, 'index']);
// Route::post('/create', [FileController::class, 'create']);
// Route::get('/edit/{id}', [FileController::class, 'edit']);
// Route::get('/update/{id}', [FileController::class, 'update']);
// Route::delete('/delete/{id}', [FileController::class, 'destroy']);


//Form validation with crud operation and also used helper functions
// Route::controller(FileController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::post('create', 'create');
//     Route::get('edit/{id}', 'edit');
//     Route::post('update/{id}', 'update');
//     Route::get('delete/{id}', 'destroy');
//     Route::get('download/{filename}', 'download');
// });

// Route::get('/', [UserController::class, 'index']);


// Route::get('/', [TestEmailController::class, 'sendTestEmails']);

//practice for observer
// Route::get('/', function () {
//     //statically deleting the data
//     Post::whereId(1)->first()->delete();
//     // Comment::wherePostId(1)->delete();

//     dd('done');
// });

//used Traits
//Route::resource('students', StudentController::class);

//localization with with specific languages
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('home');
// });


//localization with with specific languages using json file
// Route::get('/', function () {
//     return view('json');
// });
// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('json');
// });


Route::controller(CountryController::class)->prefix('country')->group(function () {
    Route::get('/', 'index');
    Route::get('create', 'createPage');
    Route::post('save', 'create');
    Route::get('edit/{id}', 'edit');
    Route::put('update/{id}', 'update');
    Route::delete('delete/{id}', 'destroy');
});

Route::controller(StateController::class)->prefix('state')->group(function () {
    Route::get('/', 'index');
    Route::get('create', 'createPage');
    Route::post('save', 'create');
    Route::get('edit/{id}', 'edit');
    Route::put('update/{id}', 'update');
    Route::delete('delete/{id}', 'destroy');
});

Route::controller(CityController::class)->prefix('city')->group(function () {
    Route::get('/', 'index');
    Route::get('create', 'createPage');
    Route::post('save', 'create');
    Route::get('edit/{id}', 'edit');
    Route::put('update/{id}', 'update');
    Route::delete('delete/{id}', 'destroy');
});
