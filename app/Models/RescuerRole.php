<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class RescuerRole extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = [
        "label"
    ];

    public function rescuerRescue()
    {
        return $this->belongsTo(RescuerRescue::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('rescuer-roles.show', ['rescuerRoles' => $this->id]);

        return new \Spatie\Searchable\SearchResult(
            $this,
            "Role du secouriste : " . $this->label,
            $url
        );
    }
}
