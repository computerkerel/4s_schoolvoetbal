<?php

namespace App\Http\Controllers;


use App\Models\Team;
use App\Models\Wedstrijd;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages/home');
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
