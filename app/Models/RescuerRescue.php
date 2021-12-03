<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RescuerRescue extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["rescuer_id", "rescue_id", "rescuer_role_id"];
}
