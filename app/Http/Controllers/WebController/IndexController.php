<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;

class IndexController extends Controller
{
  public function index()
  {
    return $this->success(true);
  }

  public function statistics(Request $request)
  {
    if (!$request->uri) {
      return $this->error('uri error');
    }

    Cache::store('redis')->increment($request->uri);

    return $this->success(true);
  }
}
