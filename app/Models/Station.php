<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Station extends Model
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'zipcode',
        'history',
    ];

    public function boats()
    {
        return $this->hasMany(Boat::class);
    }
}
