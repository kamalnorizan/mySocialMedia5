<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

}
