<?php
use App\Http\Controllers\PageListController;
use App\Http\Controllers\CollegueController;

use Illuminate\Support\Facades\Route;



Route::get('/', [PageListController::class, 'welcome']);

Route::get('/homess', [PageListController::class, 'home'])->name('home');
Route::get('/team', [PageListController::class, 'team']);

Route::get('/about', [PageListController::class, 'about']);
Route::get('/contact', [PageListController::class, 'contact']);
Route::get('/login', [PageListController::class, 'login']);
Route::get('/register', [PageListController::class, 'register']);


//Route::get('/register', function () {
//return view('register');
//});
/*Route::get('/{username?}', function ($username =null) {
    echo $username ?? 'No username';
});*/

Route::get('/collegue',[CollegueController::class,'collegue']);
