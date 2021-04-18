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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'examples',
    'ExamplesController@index'
)->name('examples.index');

Route::get(
    'examples/snippet',
    'ExamplesController@snippet'
)->name('examples.snippet');

Route::get(
    'examples/snippet-with-params',
    'ExamplesController@snippetWithParams'
)->name('examples.snippet-with-params');

Route::get(
    'examples/snippet-from-cache',
    'ExamplesController@snippetFromCache'
)->name('examples.snippet-from-cache');

Route::get(
    'examples/snippets',
    'ExamplesController@snippets'
)->name('examples.snippets');

Route::get(
    'examples/snippets-with-params',
    'ExamplesController@snippetsWithParams'
)->name('examples.snippets-with-params');

Route::get(
    'examples/snippets-from-cache',
    'ExamplesController@snippetsFromCache'
)->name('examples.snippets-from-cache');
