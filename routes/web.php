<?php
use App\Company;
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
    $company_names = Company::all()->value('company_logo_path');
    return view('welcome', compact('company_names'));
});

Route::get('aboutdelipack', 'navigationController@about');
Route::get('delipackpartners', 'navigationController@partners');
Route::get('contactdelipack', 'navigationController@contact');
Route::get('services', 'navigationController@services');

Route::post('/sendClientRequest','navigationController@clientRequest');
Route::get('/delipack_privacy','navigationController@delipackprivacy');