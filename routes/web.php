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
    return redirect('/bic-admin');
});
Route::get('/test-popup', 'test_popup@index');
//
Route::get('/bic-admin','bicadminController@index')->name('home');
Route::get('/bic-admin/login','bicadminController@login')->name('login');


///////////////////////////////////////////////////////////////////////////////////////////////////
//program  route
Route::get('/bic-admin/program','programController@index')->name('program');
Route::get('/bic-admin/edit-program/{id}','programController@edit_program')->name('edit-program');
Route::get('/bic-admin/tambah-program','programController@tambah_program')->name('tambah-program');


Route::post('/bic-admin/tambah-program-proses', 'programController@store_program');
Route::post('/bic-admin/update-program/{id}' ,'programController@update_program');
Route::post('/bic-admin/hapus-program', 'programController@hapus_program');


///////////////////////////////////////////////////////////////////////////////////////////////////
//pengumuman route
Route::get('/bic-admin/pengumuman','pengumumanController@index')->name('pengumuman'); 
Route::get('/bic-admin/edit-pengumuman/{id}','pengumumanController@edit_pengumuman')->name('edit-pengumuman');
Route::get('/bic-admin/tambah-pengumuman','pengumumanController@tambah_pengumuman')->name('tambah-pengumuman');

Route::post('/bic-admin/store-pengumuman', 'pengumumanController@store_pengumuman');
Route::post('/bic-admin/update-pengumuman/{id}', 'pengumumanController@update_pengumuman');
Route::post('/bic-admin/hapus-pengumuman', 'pengumumanController@hapus_pengumuman');


///////////////////////////////////////////////////////////////////////////////////////////////////
//beasiswa route
Route::get('/bic-admin/beasiswa','beasiswaController@index')->name('beasiswa');
Route::get('/bic-admin/edit-beasiswa/{id}','beasiswaController@edit_beasiswa')->name('edit-beasiswa');
Route::get('/bic-admin/tambah-beasiswa','beasiswaController@tambah_beasiswa')->name('tambah-beasiswa');


Route::post('/bic-admin/store-beasiswa', 'beasiswaController@store_beasiswa');
Route::post('/bic-admin/update-beasiswa/{id}', 'beasiswaController@update_beasiswa');
Route::post('/bic-admin/hapus-beasiswa', 'beasiswaController@hapus_beasiswa');


///////////////////////////////////////////////////////////////////////////////////////////////////
//grade route
Route::get('/bic-admin/grade','gradeController@index')->name('grade');
Route::get('/bic-admin/edit-grade','gradeController@edit_grade')->name('edit-grade');
Route::get('/bic-admin/tambah-grade','gradeController@tambah_grade')->name('tambah-grade');


///////////////////////////////////////////////////////////////////////////////////////////////////
//profil admin route
Route::get('/bic-admin/profil-admin','profiladminController@index')->name('profil-admin');
Route::get('/bic-admin/update-admin','profiladminController@update_admin')->name('update-admin');


///////////////////////////////////////////////////////////////////////////////////////////////////
//profil user route 
Route::get('/bic-admin/profil-user','profiluserController@index')->name('profil-user');

