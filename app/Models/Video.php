<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = ['category_id','title','image','status'];

    public function VideosCategory()
    {
        return $this->belongsTo(VideosCategory::class,'category_id');
    }
}
