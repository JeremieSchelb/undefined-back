<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Boat extends Model
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'name',
        'type',
        'constructor',
        'length',
        'width',
        'weight',
        'draugth',
        'commisionning',
        'withdraw',
        'description',
        'station_id'
    ];

    protected $dates = ['commisionning', 'withdraw'];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function rescues()
    {
        return $this->belongsToMany(Rescue::class);
    }
}
