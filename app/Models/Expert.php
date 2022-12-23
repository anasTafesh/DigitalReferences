<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

protected $fillable = [
    'user_id',
    'image',
    'description',
    'address',
    'days'
];


    public function user(){
        return $this->belongsTo(user::class);
    }
    
public function calendar() {
    return $this->hasMany(Calendar::class);
}

}

