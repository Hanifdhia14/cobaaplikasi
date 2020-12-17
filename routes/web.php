<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|//Admin
*/
Route::get('/main', function () {
    return view('home');
});
//Route::get('/main', 'HomeController@index');

Route:: get('/', function () {
    return view('login');
});

//Route:: get('employee', function () {
//    return view('employee.index');
//});

//LOG-IN
Route::get('login', 'LoginController@index');
Route::POST('login', 'LoginController@do_login');


//Kuadran:
Route::get('kuadran.index', 'KuadranController@index');
Route::POST('kuadran.index.store', 'KuadranController@store');
Route::match(['get', 'POST'], 'kuadran.index.edit', 'KuadranController@edit');
Route::get('kuadran.index.destroy{id}', 'KuadranController@destroy');




//kpi:
Route::get('kpi.index', 'KpiController@index');
Route::POST('kpi.index.store', 'KpiController@store');
Route::match(['get', 'POST'], 'kpi.index.edit', 'KpiController@edit');
Route::get('kpi.index.destroy{id}', 'KpiController@destroy');





//tipe_penilaian:
Route::get('tipe_penilaian.index', 'TipepenilaianController@index');
Route::POST('tipe_penilaian.index.store', 'TipepenilaianController@store');
Route::match(['get', 'POST'], 'tipe_penilaian.index.edit', 'TipepenilaianController@edit');
Route::get('tipe_penilaian.index.destroy{id}', 'TipepenilaianController@destroy');





// satuan:
Route::get('satuan.index', 'SatuanController@index');
Route::POST('satuan.index.store', 'SatuanController@store');
Route::match(['get', 'POST'], 'satuan.index.edit', 'SatuanController@edit');
Route::get('satuan.index.destroy{id}', 'SatuanController@destroy');




//nilai_maksimal:
Route::get('nilai_maksimal.index', 'NilaimaksimalController@index');
Route::POST('nilai_maksimal.index.store', 'NilaimaksimalController@store');
Route::match(['get', 'POST'], 'nilai_maksimal.index.edit', 'NilaimaksimalController@edit');
Route::get('nilai_maksimal.index.destroy{id}', 'NilaimaksimalController@destroy');



// document:
Route::get('document.index', 'DocumentController@index');
Route::POST('document.index.store', 'DocumentController@store');
Route::match(['get', 'POST'], 'document.index.edit', 'DocumentController@edit');
Route::get('document.index.destroy{id}', 'DocumentController@destroy');


// Data Employee
Route::get('employee.index', 'EmployeeController@index');
Route::POST('employee.index.store', 'EmployeeController@store');
Route::get('employee.index.destroy{id}', 'EmployeeController@destroy');

//Hak Akses
Route::get('hakakses.index', 'HakaksesController@index');

//User
Route::get('user.userhome', 'user.UserhomeController@index');
