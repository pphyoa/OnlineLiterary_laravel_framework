<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Like extends Model
{
    use HasFactory;
    // protected $fillable=[
    //   'user_id','like','post_id',
    // ];
    public function dailylike():MorphTo
    {
      return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
