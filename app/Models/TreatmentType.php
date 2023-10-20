<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentType extends Model
{
    use HasFactory;
    protected $table = 'treatment_types';
    protected $fillable = ['category','treatment_type_id','question','answer','image','status'];

    public function Treatment()
    {
        return $this->belongsTo(Treatment::class,'treatment_type_id');
    }
}
