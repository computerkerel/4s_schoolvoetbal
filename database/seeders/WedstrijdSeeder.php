<?php

namespace Database\Seeders;


use App\Models\Wedstrijd;
use Illuminate\Database\Seeder;

class WedstrijdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wedstrijd = new Wedstrijd();
        $wedstrijd->title = "4S Schoolvoetbal vs FC Breda";
        $wedstrijd->team1 = 1;
        $wedstrijd->team2 = 2;
        $wedstrijd->score_team1 = 1;
        $wedstrijd->score_team2 = 3;
        $wedstrijd->locatie = 'NAC Stadion';
        $wedstrijd->datum = '2021-12-20 18:00:00';
        $wedstrijd->scheidsrechter = 'Danny Makkelie';
        $wedstrijd->status = "FC Breda heeft gewonen";
        $wedstrijd->save();

        $wedstrijd = new Wedstrijd();
        $wedstrijd->title = "4S Schoolvoetbal vs FC Breda";
        $wedstrijd->team1 = 1;
        $wedstrijd->team2 = 2;
        $wedstrijd->score_team1 = 4;
        $wedstrijd->score_team2 = 2;
        $wedstrijd->locatie = 'Dorst Stadion';
        $wedstrijd->datum = '2022-1-19 18:00:00';
        $wedstrijd->scheidsrechter = ' Bas Nijhuis';
        $wedstrijd->status = "4S Schoolvoetbal heeft gewonen";
        $wedstrijd->save();


    }
}
