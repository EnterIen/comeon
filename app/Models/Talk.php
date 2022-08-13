<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Message;

class Talk extends Model
{
  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function messages()
  {
    return $this->hasMany(Message::class)->orderBy('messages.id', 'desc');
  }
}
