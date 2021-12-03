<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Testimony extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        "content",
        "rescuer_id",
        "rescue_id",
        "castaway_id",
    ];

    public function rescuer()
    {
        return $this->belongsTo(Rescuer::class);
    }

    public function rescue()
    {
        return $this->belongsTo(Rescue::class);
    }

    public function castaway()
    {
        return $this->belongsTo(Castaway::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('testimonies.show', ['testimony' => $this->id]);

        $words = $this->content;
        $string = Str::words($words, 5, ' ...');

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Témoignage : " . $string . " ...",
            $url
        );
    }
}
