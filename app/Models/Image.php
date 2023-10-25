<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = ['category_id','title','image','status'];

    public function ImagesCategory()
    {
        return $this->belongsTo(ImagesCategory::class,'category_id');
    }
}
