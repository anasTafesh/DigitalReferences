<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consul_expert extends Model
{
    use HasFactory;
    protected $fillable = ['consultationId','expert_id'];
}
