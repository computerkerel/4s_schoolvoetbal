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
        $team->ingeschreven_door = "Ibrahim";
        $team->teamnaam = "FC Breda";
        $team->save();

        $team = new Team();
        $team->ingeschreven_door = "Noor";
        $team->teamnaam = "FC Tilburg";
        $team->save();

        $team = new Team();
        $team->ingeschreven_door = "Sam";
        $team->teamnaam = "FC Roosendaal";
        $team->save();

        $team = new Team();
        $team->ingeschreven_door = "Jorjan";
        $team->teamnaam = "FC Dorst";
        $team->save();
    }
}
