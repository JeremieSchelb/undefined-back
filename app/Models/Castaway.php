<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Castaway extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'zipcode',
        'city',
        'alive'
    ];

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }
}
