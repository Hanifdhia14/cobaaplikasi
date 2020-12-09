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
Route::POST('kuadran.index.edit(id)', 'KuadranController@edit');
Route::get('kuadran.index.destroy{id}', 'KuadranController@destroy');




//kpi:
Route::get('kpi.index', 'KpiController@index');
Route::POST('kpi.index.store', 'KpiController@store');
Route::get('kpi.index.destroy{id}', 'KpiController@destroy');





//tipe_penilaian:
Route::get('tipe_penilaian.index', 'TipepenilaianController@index');
Route::POST('tipe_penilaian.index.store', 'TipepenilaianController@store');
Route::get('tipe_penilaian.index.destroy{id}', 'TipepenilaianController@destroy');





// satuan:
Route::get('satuan.index', 'SatuanController@index');
Route::POST('satuan.index.store', 'SatuanController@store');
Route::get('satuan.index.destroy{id}', 'SatuanController@destroy');




//nilai_maksimal:
Route::get('nilai_maksimal.index', 'NilaimaksimalController@index');
Route::POST('nilai_maksimal.index.store', 'NilaimaksimalController@store');
Route::get('nilai_maksimal.index.destroy{id}', 'NilaimaksimalController@destroy');



// document:
Route::get('document.index', 'DocumentController@index');
Route::POST('document.index.store', 'DocumentController@store');
Route::get('document.index.destroy{id}', 'documentController@destroy');


// Data Employee
Route::get('employee.index', 'EmployeeController@index');


//Hak Akses

//User
Route::get('user.userhome', 'user.UserhomeController@index');
