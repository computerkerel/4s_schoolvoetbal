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
        $team -> ingeschreven_door = "ibrahim";
        $team -> team = "Fc Breda";
        $team -> save();

        $team = new Team();
        $team -> ingeschreven_door = "Noor";
        $team -> teamnaam = "Fc Tilburg";
        $team -> save();

        $team = new Team();
        $team -> ingeschreven_door = "sam";
        $team -> teamnaam = "Fc Roosendaal";
        $team -> save();

        $team = new Team();
        $team -> ingeschreven_door = "jorjan";
        $team -> teamnaam = "Fc Dorst";
        $team -> save();
    }
}
