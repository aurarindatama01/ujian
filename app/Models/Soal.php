<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
  public function dataDateri()
  {
    return $this->belongsTo('App\Models\Materi', 'materi');
  }
  public function user()
  {
    return $this->belongsTo('App\User', 'id_user');
  }
}
