<?php

namespace App\Http\Controllers;


use App\Models\Team;
use App\Models\Wedstrijd;
use Illuminate\Http\Request;

class PageController extends Controller
{
 public function welcome(){
     return view('pages/welcome');
 }

 public  function dashboard(){
     return view('pages/dashboard');
 }


    public  function teams(){
        $teams = Team::all();
        return view('pages/teams') -> with(['teams' => $teams]);
    }

    public  function wedstrijden(){
        $wedstrijden = Wedstrijd::all();
        return view('pages/wedstrijden') -> with(['wedstrijden' => $wedstrijden]);
    }

}
