<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_tags');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_tags');
    }
}
