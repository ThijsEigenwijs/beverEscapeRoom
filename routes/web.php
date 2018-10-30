<?php


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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('/email', function () {
    if (Auth::user() != null)
        return view('test');
    else
        return view('noAccess');
})->name('test_email');

//This are the Testing with Thijs functions

Route::get('/gritter', function () {
    if (Auth::user() != null)
        return view('gritter-test');
    else
        return view('noAccess');
})->name('gritter-test');

Route::get('/modal', function () {
    if (Auth::user() != null)
        return view('modal-test');
    else
        return view('noAccess');
})->name('modal-test');

Route::get('/alert', function () {
    if (Auth::user() != null)
        return view('alert-test');
    else
        return view('noAccess');
})->name('alert-test');

Route::get('/progress', function () {
    if (Auth::user() != null)
        return view('progress-test');
    else
        return view('noAccess');
})->name('progress-test');

Route::get('/label', function () {
    if (Auth::user() != null)
        return view('label-test');
    else
        return view('noAccess');
})->name('label-test');


Route::get('/buttons', function () {
    if (Auth::user() != null)
        return view('buttons-test');
    else
        abort(404, 'Not authorised');
    return view('noAccess');
})->name('buttons-test');

Route::get('/loginNew', function () {
    return view('loginNew');
})->name('loginNew');

//Route::get('/codes', function () {
//    return view('codes');
//})->name('codes');

Route::get('/hints','HomeController@hints')->name('hints');

Route::get('/codes','HomeController@codes')->name('codes');

Route::get('/reset','HomeController@reset')->name('reset');

Route::post('/codes','HomeController@codesPost')->name('codesPost');

Route::get('/addPuzzels', function () {
    return view('addPuzzels');
})->name('addPuzzels');

/* View Composer*/
View::composer(['*'], function ($view) {

    $user = Auth::user();
    $view->with('user', $user);

});

