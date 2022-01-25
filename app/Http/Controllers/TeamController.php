<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        $matches = Match::all();

        return view('pages.teams')
            ->with(compact('teams', 'matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'teamnaam' => 'required|unique:teams',
            'ingeschreven_door' => 'required'
        ]);

        $team = new Team();
        $team->teamnaam = $request->teamnaam;
        $team->ingeschreven_door = Auth::user()->id;
        $team->save();

        return redirect()->route('teams.index')
            ->with('success', 'Team succesvol aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('admin.teams.show')
            ->with(compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('admin.teams.edit')
            ->with(compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'teamnaam' => 'required',
            'ingeschreven_door' => 'required'
        ]);

        $team = Team::findOrFail($id);
        $team->teamnaam = $request->teamnaam;
        $team->ingeschreven_door = Auth::user()->id;
        $team->save();

        return redirect()->route('teams.index')
            ->with('success', 'Team succesvol aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::destroy($id);

        return redirect()->route('teams.index')
            ->with('success', 'Team succesvol verwijderd');
    }
}
