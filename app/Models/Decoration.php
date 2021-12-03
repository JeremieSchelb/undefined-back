<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Decoration extends Model
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'label',
        'image'
    ];

    public function rescuers()
    {
        return $this->belongsToMany(Rescuer::class);
    }
}
