<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Castaway extends Model
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

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
