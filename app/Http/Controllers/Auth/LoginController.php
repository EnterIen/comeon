<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use GuzzleHttp\Client;
use Log;

class LoginController extends Controller
{

  /**
   * { 如果 common 没有登陆 需要拿着 comeon 的密钥去 kingkong 授权 }
   *
   * @return     <type>  ( description_of_the_return_value )
   */
  public function AuthEntry()
  {
    Log::info('AuthEntry Coming:');

    $query = http_build_query([
      'client_id'    => config('services.comeon-kingkong.appid'),
      'redirect_uri' => config('services.comeon-kingkong.callback'),
      'response_type'=> 'code',
      'scope' => '*',
    ]);

    // return redirect('http://120.77.98.154/oauth/authorize?' . $query);
    return redirect('http://comeon-kingkong.test/oauth/authorize?' . $query);

    return $this->success($query);
  }

  public function JumpKingkong()
  {

  }

  public function AuthCallback(Request $request)
  {
    $code = $request->get('code', '');

    Log::info('AuthCallbackCode Coming:' . $code);

    if (!$code) {
      dd('授权失败');
    }
    // $http = new Client();
    // $response = $http->post('http://comeon-kingkong.test/oauth/token', [
    //   'form_params' => [
    //     'grant_type' => 'authorization_code',
    //     'client_id' => config('services.comeon-kingkong.appid'),        
    //     'client_secret' => config('services.comeon-kingkong.secret'),   
    //     'redirect_uri' => config('services.comeon-kingkong.callback'),
    //     'code' => $code,
    //   ],
    // ]);

    session('token', $code);    // 将金刚颁发的 Token 放入当前应用作为是否通过用户认证的凭证

    return redirect('http://comeon.test');

    return response($response->getBody());
  }
}
