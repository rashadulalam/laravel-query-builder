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

    public function findRows()
    {
        $results = DB::table('students')->find(1);
        return $results;
    }

    public function selectOneColumn()
    {
        $results = DB::table('students')->pluck('name');

        return $results;
    }

    public function multiColumn()
    {
        $results = DB::table('students')->pluck('name', 'roll');
        return $results;
    }

    public function spData()
    {
        $results = DB::table('students')->where('id', '=', '1')->value('name');
        return $results;
    }
}
