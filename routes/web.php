<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LearnController;


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
//ROUTE PAGE
Route::get('/',[IndexController::class, 'index'])->name('index');
Route::get('/about',[AboutController::class, 'about'] );
Route::get('/contact',[ContactController::class, 'contact'] );
Route::get('/Courses',[CoursesController::class, 'courses'])->name('courses');
Route::get('video',[VideoController::class, 'video'])->name('video');
//TRUYEN BIEN NAME_COURSES DE LAY KHOA HOC
Route::get('/learn/{name_courses}',[LearnController::class, 'learn'])->name('learn');

//Route search
Route::get('/search',[VideoController::class, 'search']);
//Route courses
Route::get('/html',[IndexController::class, 'html']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::resource('courses',CoursesController::class);
Route::resource('video',VideoController::class);

//ROUTE TIM KIEM KHOA HOC(CHUA LAM DUOC)
Route::post('search',['App\Http\Controllers\VideoController@search']);

