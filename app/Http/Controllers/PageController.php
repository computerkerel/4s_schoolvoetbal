<?php

namespace App\Http\Controllers;


use App\Models\Team;
use App\Models\Match;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $wedstrijden = Match::where('datum', '>=', date('Y-m-d'))->take(2)->orderBy("datum", 'desc')->get();
        return view('pages/home')->with(['wedstrijden'=>$wedstrijden]);

    }

    public function dashboard()
    {
        return view('pages/dashboard');
    }

    public function teams()
    {
        $teams = Team::all();
        return view('pages/teams')->with(['teams' => $teams]);
    }

}
