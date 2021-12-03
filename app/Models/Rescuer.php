<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Rescuer extends Model
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

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
