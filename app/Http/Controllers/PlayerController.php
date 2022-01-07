<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $teams = Team::has('players', '>', 0)->get();

        return view('pages.players')
            ->with(['players' => $players, 'teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $teamId)
    {
        $players = Team::findOrFail($teamId)->players;

        $this->validate($request, [
            'naam' => 'required'
        ]);

        if ($players->count() < 11) {
            $player = new Player();
            $player->naam = $request->naam;
            $player->team_id = $teamId;
            $player->save();

            return redirect()->route('teams.edit', $teamId)
                ->with('success', 'Speler succesvol toegevoegd');
        } else {
            return back()->with('danger', 'Team heeft al 11 spelers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::destroy($id);

        return redirect()->back()
            ->with('success', 'Speler succcesvol verwijderd');
    }
}
