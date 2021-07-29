<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class RetrivingResults extends Controller
{
    public function allRows()
    {
        $results = DB::table('students')->get();
        return $results;
    }


    public function selectOneRow()
    {
        $results = DB::table('students')->where('id', '1')->first();

        return $results;
    }
}
