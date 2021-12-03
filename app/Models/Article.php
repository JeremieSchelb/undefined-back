<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Article extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = ["title", "content", "category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('articles.show', ['article' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Article : " . $this->title,
            $url
        );
    }
}
