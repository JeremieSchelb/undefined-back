<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Category extends Model implements Searchable
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'label',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('categories.show', ['category' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Categorie : " . $this->label,
            $url
        );
    }
}
