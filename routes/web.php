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
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/admin', function () {
    return view('adminp');
})->name('admin');

Route::get('/',"App\Http\Controllers\AdminController@index");
Route::get('/suppadmin/{id}',"App\Http\Controllers\AdminController@destroy");
Route::get('/show/{id}',"App\Http\Controllers\AdminController@show");
Route::get('/dark',"App\Http\Controllers\AdminController@create");
Route::post('/connexion',"App\Http\Controllers\AdminController@conect");
Route::post('/storeadmin',"App\Http\Controllers\AdminController@store");


Route::get('/nos-articles',"App\Http\Controllers\ArticleController@index");
Route::get('/nos-articles_dark',"App\Http\Controllers\ArticleController@indexd");
Route::get('/articles',"App\Http\Controllers\ArticleController@create");
Route::get('/creer-article',"App\Http\Controllers\ArticleController@created");
Route::get('/article/{id}',"App\Http\Controllers\ArticleController@show");
Route::get('/article_dark/{id}',"App\Http\Controllers\ArticleController@showd");
Route::get('/Modifier-article/{id}',"App\Http\Controllers\ArticleController@edit");
Route::post('/storeart',"App\Http\Controllers\ArticleController@store");
Route::post('/updateart/{id}',"App\Http\Controllers\ArticleController@update");
Route::get('/suppart/{id}',"App\Http\Controllers\ArticleController@destroy");


Route::get('/nos-projets',"App\Http\Controllers\ProjetController@index");
Route::get('/nos-projets_dark',"App\Http\Controllers\ProjetController@indexd");
Route::get('/projets',"App\Http\Controllers\ProjetController@create");
Route::get('/creer-projet',"App\Http\Controllers\ProjetController@created");
Route::get('/projet/{id}',"App\Http\Controllers\ProjetController@show");
Route::get('/projet_dark/{id}',"App\Http\Controllers\ProjetController@showd");
Route::get('/Modifier-projet/{id}',"App\Http\Controllers\ProjetController@edit");
Route::post('/storepro',"App\Http\Controllers\ProjetController@store");
Route::post('/updatepro/{id}',"App\Http\Controllers\ProjetController@update");
Route::get('/supppro/{id}',"App\Http\Controllers\ProjetController@destroy");


Route::get('/à-propos',"App\Http\Controllers\TeamController@index");
Route::get('/à-propos_dark',"App\Http\Controllers\TeamController@indexd");
Route::get('/teams',"App\Http\Controllers\TeamController@create");
Route::get('/creer-membre',"App\Http\Controllers\TeamController@created");
Route::get('/Modifier-membre/{id}',"App\Http\Controllers\TeamController@edit");
Route::post('/storeteam',"App\Http\Controllers\TeamController@store");
Route::post('/updateteam/{id}',"App\Http\Controllers\TeamController@update");
Route::get('/suppteam/{id}',"App\Http\Controllers\TeamController@destroy");


Route::get('/testims',"App\Http\Controllers\TestimController@index");
Route::get('/creer-testim',"App\Http\Controllers\TestimController@create");
Route::get('/Modifier-testim/{id}',"App\Http\Controllers\TestimController@edit");
Route::post('/storetestim',"App\Http\Controllers\TestimController@store");
Route::post('/updatetestim/{id}',"App\Http\Controllers\TestimController@update");
Route::get('/supptestim/{id}',"App\Http\Controllers\TestimController@destroy");


Route::get('/contact',"App\Http\Controllers\MessageController@index");
Route::get('/contact_dark',"App\Http\Controllers\MessageController@create");
Route::post('/storemsg',"App\Http\Controllers\MessageController@store");
Route::get('/Message',"App\Http\Controllers\MessageController@created");
Route::get('/suppmsg/{id}',"App\Http\Controllers\MessageController@destroy");


Route::get('/acceuil_admin',"App\Http\Controllers\CommunauteController@index");
Route::post('/storecom',"App\Http\Controllers\CommunauteController@store");
Route::get('/suppcom/{id}',"App\Http\Controllers\CommunauteController@destroy");
