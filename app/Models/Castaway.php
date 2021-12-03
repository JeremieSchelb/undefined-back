<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Castaway extends Model implements Searchable
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'zipcode',
        'city',
        'alive'
    ];

    public function rescues()
    {
        return $this->belongsToMany(Rescue::class);
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('castaways.show', ['castaway' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Naufragé : " . $this->firstname . " " . $this->lastname,
            $url
        );
    }
}
