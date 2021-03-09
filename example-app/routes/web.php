<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 
[App\Http\Controllers\HomeController::class, 'index']
)->name('home');


Route::group([
    "middleware" => "auth"
],function(){
    Route::get("/test",function(){
        return "test";
    })->name("test");
});

Route::get('/test',function(){
    return User::get()[0];
});


Route::get('/get_token',function(){
    // token lay o ben blade, goi len api
    // $user = Auth::user();
    // return $user->api_token;
    return View("get_token");
});