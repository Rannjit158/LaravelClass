<?php
use App\Http\Controllers\PageListController;
use App\Http\Controllers\CollegueController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;



Route::get('/', [PageListController::class, 'welcome']);

Route::get('/home', [PageListController::class, 'home'])->name('home');
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

Route::get('/collegue',[CollegueController::class,'collegue'])->name('collegue');
Route::get('/collegue/delete',[CollegueController::class,'deleteCollegue'])->name('collegue.delete');



Route::prefix('student')
->name('student.')
->controller(StudentController::class)
->group (function(){
     Route::get('/ranjit','ranjit')->name('ranjit');
Route::get('/sanjib','sanjib')->name('sanjib');
Route::get('/rohan','rohan')->name('rohan');
Route::get('/aman','aman')->name('aman');
Route::get('/amit','amit')->name('amit');
Route::get('/rupesh','rupesh')->name('rupesh');
Route::get('/prabin','prabin')->name('prabin');
Route::get('/suhana','suhana')->name('suhana');
Route::get('/salok','salok')->name('salok');
Route::get('/apakshya','apakshya')->name('apakshya');
 });
