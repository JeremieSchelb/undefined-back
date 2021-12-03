<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Station extends Model implements Searchable
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

    public function getSearchResult(): SearchResult
    {
        $url = route('stations.show', ['station' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Station : " . $this->name,
            $url
        );
    }
}
