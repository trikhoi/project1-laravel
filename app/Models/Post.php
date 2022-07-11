<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = 'post';
    protected $fillable = [
      'title',
      'content',
      'slug',
      'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

//    public function getRouteKeyName()
//    {
//        return 'id';
//    }
}
