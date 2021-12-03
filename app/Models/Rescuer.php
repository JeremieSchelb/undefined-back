<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rescuer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'biography',
        'birthday',
        'firstname',
        'lastname'
    ];

    public function decorations()
    {
        return $this->belongsToMany(Decoration::class);
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }
}
