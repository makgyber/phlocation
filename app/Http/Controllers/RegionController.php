<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show() {
        $locations = DB::table('locations')
            ->where('level', 'reg')
            ->get()
            ;
        return $locations;
    }
}
