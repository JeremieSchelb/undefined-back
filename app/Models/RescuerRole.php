<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class RescuerRole extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        "label"
    ];
}
