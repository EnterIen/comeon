<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

use App\Http\Controllers\WebController\IndexController;
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

Route::get('phpinfo', function () {
  return phpinfo();
});

Route::get('index', [IndexController::class, 'index']);

Route::get('page/visits', [IndexController::class, 'getSiteVisits']);
