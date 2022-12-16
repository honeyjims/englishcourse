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
    return view('frontend.index');
})->name('frontend.home');

//frontend
Route::get('/about', function () {
    return view('frontend.about');
})->name('about.frontend');

Route::get('/pricing', function () {
    return view('frontend.price');
})->name('price.frontend');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user
Route::prefix('user')->group(function(){
    Route::get('/register', 'registerController@create')->name('user.register');
    Route::post('/save-register', 'registerController@store')->name('register.store');
    Route::get('/placement-test', 'TestController@index')->name('user.test.index');
    Route::get('/start-test', 'TestController@startTest')->name('user.test.start');
    Route::get('/result-test', 'TestController@resultTest')->name('user.test.result');
    Route::post('/done', 'TestController@calculate')->name('user.test.done');
});



//Admin
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@adminLogin')->name('admin.login.submit');
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    //dashboard
    Route::get('/home', 'admin\HomeController@index')->name('admin.home');
    //register
    Route::get('/data', 'registerController@index')->name('admin.index');
    //register-edit
    Route::get('/data/edit/{id}', 'registerController@edit')->name('register.edit');
    Route::post('/data/update/{id}', 'registerController@update')->name('register.update');
    //register-delete
    Route::get('/data/delete/{id}', 'registerController@destroy')->name('register.delete');

    //daftarsoal
    Route::get('/daftar-soal', 'soalController@index')->name('soal.index');
    //daftarsoal-create
    Route::get('/tambah-soal', 'soalController@create')->name('soal.create');
    Route::post('/simpan-soal', 'soalController@store')->name('soal.save');
    //daftarsoal-edit
    Route::get('/edit-soal/{id}', 'soalController@edit')->name('soal.edit');
    //daftarsoal-update
    Route::post('/update-soal/{id}', 'soalController@update')->name('soal.update');
    //daftarsoal-delete
    Route::get('/delete-soal/{id}', 'soalController@destroy')->name('soal.delete');
    //set waktu tes
    Route::post('/waktu-tes', 'soalController@setTimer')->name('admin.test.time');

    //hasil ujian
    Route::get('/hasil-ujian', 'TestController@resultTestAdmin')->name('hasil.index');
    Route::delete('/hasil-ujian', 'TestController@deleteResult')->name('hasil.delete');

});
