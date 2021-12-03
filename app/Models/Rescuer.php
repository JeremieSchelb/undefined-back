<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Rescuer extends Model implements Searchable
{
    use HasFactory, SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        'biography',
        'birthday',
        'firstname',
        'lastname'
    ];

    public function decorations()
    {
        return $this->belongsToMany(Decoration::class);
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }

    public function rescuerRescue()
    {
        return $this->belongsTo(RescuerRescue::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('rescuers.show', ['rescuer' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
        );
    }
}
