<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashbord2Controller;
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

// routes/web.php




Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ], function()
{

    Route::get('/', function () {
        //return view('welcome');
        return view('auth.login');
        
    });

    

    Route::view('/home', 'admin.home');
    
    Route::get('/db',[dashbord2Controller::class,'index']);




    

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});



/*
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
*/

