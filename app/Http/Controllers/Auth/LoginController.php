<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function JumpKingKong()
  {
    $query = [
      'client_id'    => config('services.comeon-kingkong.appid'),
      'redirect_uri' => config('services.comeon-kingkong.callback'),
      'response_type'=> 'code',
      'scope' => '',
    ];

    return $this->success($query);
  }
}
