<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Relhasm
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    // Relbelo
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
