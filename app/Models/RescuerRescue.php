<?php

namespace App\Models;

use App\Models\RescuerRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class RescuerRescue extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = ["rescuer_id", "rescue_id", "rescuer_role_id"];

    public function rescuerRole()
    {
        return $this->belongsTo(RescuerRole::class);
    }
}
