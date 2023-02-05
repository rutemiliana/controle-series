<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class SeasonsController extends Controller
{
    public function index(Series $series ){
        $seasons = $series->seasons()->with('episodes')->get(); // acesso a colection. seasons() é o acesso relacionamento

        return view('seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
