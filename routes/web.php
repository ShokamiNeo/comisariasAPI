<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MiControlador@index');

Route::post('import-list-excel-ubigeo', 'UbigeoController@importExcel')->name('ubigeo.import.excel');

Route::post('import-list-excel-comisaria', 'ComisariaController@importExcel')->name('comisarias.import.excel');

