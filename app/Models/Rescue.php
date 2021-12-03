<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rescue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'location',
        'report',
        'date',
    ];

    protected $dates = ['date'];

    public function boats()
    {
        return $this->belongsToMany(Boat::class);
    }

    public function castaways()
    {
        return $this->belongsToMany(Castaway::class);
    }

    public function castawayboats()
    {
        return $this->hasMany(Castawayboat::class);
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }
}
