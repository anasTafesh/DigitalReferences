<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $table='calendars';
    protected $fillable=[
        'expert_id',
        'week_num',
        'day',
        'starting_time',
        'ending_time'
    ];
    public function expert() {
        return $this->belongsTo(expert::class);
    }
}
