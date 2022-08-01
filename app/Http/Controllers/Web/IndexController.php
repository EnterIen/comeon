<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;
use Route;

class IndexController extends Controller
{
  public function index()
  {
    return $this->success(true);
  }

  public function getSiteVisits(Request $request)
  {
    return $this->success(Cache::store('redis')->get(Route::current()->uri));
  }
}
