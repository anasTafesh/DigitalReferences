<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable= ['name'];
    public function experts()
    {
       return $this->belongsToMany(Expert::class ); 
    }
}
