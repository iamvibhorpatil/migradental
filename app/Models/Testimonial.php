<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = ['category_id','title','image','status'];

    public function TestimonialCategory()
    {
        return $this->belongsTo(TestimonialCategory::class,'category_id');
    }
}
