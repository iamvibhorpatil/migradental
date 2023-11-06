<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTestimonial extends Model
{
    use HasFactory;
    protected $table = 'video_testimonials';
    protected $fillable = ['category_id','title','video','status'];

    public function TestimonialCategory()
    {
        return $this->belongsTo(TestimonialCategory::class,'category_id');
    }
}
