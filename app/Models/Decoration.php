<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Decoration extends Model implements Searchable
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

    public function getSearchResult(): SearchResult
    {
        $url = route('decorations.show', ['decoration' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Decoration : " . $this->label,
            $url
        );
    }
}
