<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authorized
{
  // 不进行登录验证的接口
  public $exceptions = [
    '/',
    'auth/entry',
    'auth/callback',
    'page/visits',
  ];

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    if (!$request->is($this->exceptions) && !session('token')) {
      return response()->json([
        'status'  => 401,
        'message' => session('token'),
        'values'  => '',
      ], 200, [], JSON_UNESCAPED_UNICODE);
    }
    return $next($request);
  }
}
