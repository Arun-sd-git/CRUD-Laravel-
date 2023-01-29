<?php

use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\PrintController;

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

// Route::get('/', function () {
//     $data = Student::paginate(25);
//     return view('main')->withData($data);
// });

// Route::get('courses',"PrintController@index");
// Route::get('conn',"connection@index");

// Route with Resource Controller
Route::resource('phonebook', 'CRUDController');

// Route::get('insertdata', 'CRUDController@display');

// Route::post('add','CRUDController@store');
