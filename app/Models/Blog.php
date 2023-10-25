<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['category_id','title','description','image','status'];

    public function BlogCategory()
    {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }
}
