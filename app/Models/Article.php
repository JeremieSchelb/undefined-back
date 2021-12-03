<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Antonrom\ModelChangesHistory\Traits\HasChangesHistory;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasChangesHistory;

    protected $fillable = ["title", "content", "category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
