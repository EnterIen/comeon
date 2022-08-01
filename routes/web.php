<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\TalkController;
use App\Http\Controllers\Auth\LoginController;

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

Route::view('broadcast', 'news');

Route::get('phpinfo', function () {
  return phpinfo();
});

Route::get('index', [IndexController::class, 'index']);

Route::get('page/visits', [IndexController::class, 'getSiteVisits']);


Route::get('/auth/entry', [LoginController::class, 'AuthEntry']);
Route::get('/auth/callback', [LoginController::class, 'AuthCallback']);


Route::group(['prefix' => 'message'], function () {
  Route::post('talk/list', [TalkController::class, 'TalkList']);
});