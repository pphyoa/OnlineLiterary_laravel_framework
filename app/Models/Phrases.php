<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Phrases extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'bulk',
        'content',
        'img',
    ];
    // public function user()
    // {
    //     return $this->hasMany(User::class,'users');
    // }
  
    public function comments():MorphMany
    {
        return $this->morphMany(Comment::class,'commentable');
    }
    public function likes()
    {
        return $this->morphMany(Like::class,'dailylike');
    }
}
