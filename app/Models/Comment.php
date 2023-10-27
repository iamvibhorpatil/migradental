<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['blog_id','name','mobile','comment'];

    public function Blog()
    {
        return $this->belongsTo(Blog::class,'blog_id');
    }
}
