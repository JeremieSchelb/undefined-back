<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Castawayboat extends Model
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'name',
        'rescue_id'
    ];

    public function rescue()
    {
        return $this->belongsTo(Rescue::class);
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }
}
