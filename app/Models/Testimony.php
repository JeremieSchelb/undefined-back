<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Testimony extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        "content",
        "rescuer_id",
        "rescue_id",
        "castaway_id",
    ];

    public function rescuer()
    {
        return $this->belongsTo(Rescuer::class);
    }

    public function rescue()
    {
        return $this->belongsTo(Rescue::class);
    }

    public function castaway()
    {
        return $this->belongsTo(Castaway::class);
    }
}
