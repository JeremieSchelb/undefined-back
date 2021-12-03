<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Boat extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'constructor',
        'length',
        'width',
        'weight',
        'draugth',
        'commisionning',
        'withdraw',
        'description',
        'station_id'
    ];

    protected $dates = ['commisionning', 'withdraw'];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}