<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $team = new Team();
        $team->ingeschreven_door = 1;
        $team->teamnaam = "FC Breda";
        $team->save();

        $team = new Team();
        $team->ingeschreven_door = 2;
        $team->teamnaam = "FC Tilburg";
        $team->save();

        $team = new Team();
        $team->ingeschreven_door = 3;
        $team->teamnaam = "FC Roosendaal";
        $team->save();

        $team = new Team();
        $team->ingeschreven_door = 2;
        $team->teamnaam = "FC Dorst";
        $team->save();
    }
}
