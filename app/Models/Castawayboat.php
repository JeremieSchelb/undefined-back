<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Castawayboat extends Model implements Searchable
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

    public function getSearchResult(): SearchResult
    {
        $url = route('castaway-boats.show', ['castawayboats' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Bateau secouru : " . $this->name,
            $url
        );
    }
}
