<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalkController extends Controller
{
  /**
   * { 分配客服，并创建会话 }
   */
  public function whichKefu()
  {
    return [
      'id'       => 666
      'nickname' => '客服胡汉三',
      'avatar'   => 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fup.enterdesk.com%2Fedpic%2F62%2Fd8%2F4f%2F62d84f6ff899d2c3c9f21b8eee1ab452.jpg&refer=http%3A%2F%2Fup.enterdesk.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=auto?sec=1661954063&t=d6308e504e17c44e3fdf3bf8114efd4b',
    ];
  }


  /**
   * { 会话列表 }
   */
  public function talks()
  {
    return [];
  }
}
