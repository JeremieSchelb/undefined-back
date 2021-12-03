<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function acceptUpdate(int $id)
    {
        $affected = DB::table('model_changes_history')
            ->where('id', $id)
            ->update(['accepted' => 1]);

        return $affected;
    }
}
