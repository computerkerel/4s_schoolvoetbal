<?php

namespace Database\Seeders;


use App\Models\Match;
use App\Models\Team;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wedstrijd = new Match();
        $wedstrijd->title = "4S Schoolvoetbal vs FC Breda";
        $wedstrijd->team1_id = Team::where('id', 1);
        $wedstrijd->team2_id = Team::where('id', 1);
        $wedstrijd->score_team1 = 1;
        $wedstrijd->score_team2 = 3;
        $wedstrijd->locatie = 'NAC Stadion';
        $wedstrijd->datum = '2021-12-20 18:00:00';
        $wedstrijd->scheidsrechter = 'Danny Makkelie';
        $wedstrijd->status = "FC Breda heeft gewonen";
        $wedstrijd->save();

        $wedstrijd = new Match();
        $wedstrijd->title = "4S Schoolvoetbal vs FC Breda";
        $wedstrijd->team1_id = 1;
        $wedstrijd->team2_id = 2;
        $wedstrijd->score_team1 = 4;
        $wedstrijd->score_team2 = 2;
        $wedstrijd->locatie = 'Dorst Stadion';
        $wedstrijd->datum = '2022-1-19 18:00:00';
        $wedstrijd->scheidsrechter = ' Bas Nijhuis';
        $wedstrijd->status = "4S Schoolvoetbal heeft gewonen";
        $wedstrijd->save();


    }
}
