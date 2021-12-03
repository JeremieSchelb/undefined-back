<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boat;
use App\Models\Castaway;
use App\Models\Castawayboat;
use App\Models\Category;
use App\Models\Decoration;
use App\Models\Rescue;
use App\Models\RescuerRole;
use App\Models\Station;
use App\Models\Testimony;
use Spatie\Searchable\Search;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(string $search)
    {
        $searchResults = (new Search())
            ->registerModel(Article::class, ['title', 'content'])
            ->registerModel(Boat::class, [
                'name',
                'type',
                'constructor',
                'length',
                'width',
                'weight',
                'draugth',
                'commisionning',
                'withdraw',
                'description'
            ])
            ->registerModel(Castaway::class, [
                'firstname',
                'lastname',
                'address',
                'zipcode',
                'city',
                'alive'
            ])
            // ->registerModel(Castawayboat::class, "name")
            ->registerModel(Category::class, "label")
            ->registerModel(Decoration::class, "label")
            ->registerModel(Rescue::class, ["location", "report", "date"])
            // ->registerModel(RescuerRole::class, "label")
            ->registerModel(Station::class, [
                'name',
                'address',
                'city',
                'zipcode',
                'history',
            ])
            ->registerModel(Testimony::class, "content")
            ->search($search);

        return $searchResults;
    }
}
