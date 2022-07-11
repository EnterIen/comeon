<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function success($data = [], Int $status = 0, String $message = 'success')
  {
    $response = [
      'status'  => $status,
      'message' => $message,
      'values'  => $data,
    ];

    return response()->json($response, 200, [], JSON_UNESCAPED_UNICODE);
  }

  public function error($message = 'error')
  {
    return $this->success([], 1, $message);
  }
}
