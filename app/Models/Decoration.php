<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Decoration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'label',
        'image'
    ];

    public function rescuers()
    {
        return $this->belongsToMany(Rescuer::class);
    }
}
