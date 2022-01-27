<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Match;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * //     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wedstrijden = Match::all();
        return view('pages.events')
            ->with(compact('wedstrijden'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        $users = User::where("role" , "=", "2")->get();
        $fields = Field::all();
        return view('admin.wedstrijden.create')
            ->with(['teams' => $teams, 'users' => $users, 'fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'team1' => 'required',
            'team2' => 'required|different:team1',
            'datum' => 'required|date',
            'scheidsrechter' => 'required',
            'veld' => 'required'
        ]);

        $wedstrijd = new Match();
        $wedstrijd->title = $request->title;
        $wedstrijd->team1_id = $request->team1;
        $wedstrijd->team2_id = $request->team2;
        $wedstrijd->datum = $request->datum;
        $wedstrijd->scheidsrechter_id = $request->scheidsrechter;
        $wedstrijd->field_id = $request->veld;
        $wedstrijd->save();

        return redirect()->route('wedstrijden.index')
            ->with('success', 'Wedstrijd succesvol aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wedstrijd = Match::findOrFail($id);
//        $teams = Team::all();
        return view('admin.wedstrijden.show')
            ->with(['wedstrijd' => $wedstrijd]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * //     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wedstrijd = Match::findOrFail($id);
        $teams = Team::all();
        $users = User::where("role" , "=", "2")->get();
        $fields = Field::all();
        return view('admin.wedstrijden.edit')
            ->with(['wedstrijd' => $wedstrijd, 'teams' => $teams, 'users' => $users, 'fields' => $fields]);
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
        $this->validate($request, [
            'title' => 'required',
            'team1' => 'required',
            'team2' => 'required|different:team1',
            'datum' => 'required|date',
            'scheidsrechter' => 'required',
            'veld' => 'required'
        ]);

        $wedstrijd = Match::findOrFail($id);
        $wedstrijd->title = $request->title;
        $wedstrijd->team1_id = $request->team1;
        $wedstrijd->team2_id = $request->team2;
        $wedstrijd->datum = $request->datum;
        $wedstrijd->scheidsrechter_id = $request->scheidsrechter;
        $wedstrijd->field_id = $request->veld;
        $wedstrijd->status = $request->status;

        if ((isset($request->score_team1) || isset($request->score_team2)) && !$wedstrijd->is_bewerkt) {
            $wedstrijd->is_bewerkt = true;
            $wedstrijd->score_team1 = $request->score_team1;
            $wedstrijd->score_team2 = $request->score_team2;
        }

        $wedstrijd->save();


        return redirect()->route('wedstrijden.index')
            ->with('success', 'Wedstrijd succesvol aangepast');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wedstrijd = Match::destroy($id);

        return redirect()->route('wedstrijden.index')
            ->with('success', 'Wedstrijd succesvol verwijderd');
    }

    public function clear()
    {
        if (Auth::user()->role != 3) {
            return redirect()->route('wedstrijden.index')
                ->with('danger', 'Je hebt niet voldoende rechten');
        }

        $wedstrijden = Match::all();

        foreach ($wedstrijden as $wedstrijd) {
            Match::destroy($wedstrijd->id);
        }

        return redirect()->route('wedstrijden.index')
            ->with(['success', 'Alle wedstrijden succesvol verwijderd']);
    }

    public function generate()
    {
        if (Auth::user()->role != 3) {
            return redirect()->route('wedstrijden.index')
                ->with('danger', 'Je hebt niet voldoende rechten');
        }

        $teams = Team::all();

        for ($i = 0; $i < count($teams); $i++) {
            for ($j = $i + 1; $j < count($teams); $j++) {
                $wedstrijd = new Match();
                $wedstrijd->team1_id = $teams[$i]->id;
                $wedstrijd->team2_id = $teams[$j]->id;
                $wedstrijd->save();
            }
        }

        return redirect()->route('wedstrijden.index')
            ->with('success', 'Competitie succesvol gegenereerd');

    }

    public function fetchinator()
    {
        $matches = Match::all();

        $json = [];

        foreach ($matches as $match) {
            $matchData = [
                'id' => $match->id,
                'title' => $match->title,
                'team1_id' => $match->team1->id,
                'team1_naam' => $match->team1->teamnaam,
                'team1_score' => $match->score_team1,
                'team2_id' => $match->team2->id,
                'team2_naam' => $match->team2->teamnaam,
                'team2_score' => $match->score_team1,
                'datum' => $match->datum,
                'scheidsrechter_id' => $match->scheidsrechter->id,
                'scheidsrechter_naam' => $match->scheidsrechter->name,
                'veld_id' => $match->field->id,
                'veld_naam' => $match->field->naam
            ];

            array_push($json, $matchData);
        }

        return Match::all();
    }
}
