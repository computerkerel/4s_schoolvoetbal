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
        $team->name = "Ibrahim";
        $team->team = "FC Breda";
        $team->save();

        $team = new Team();
        $team->name = "Noor";
        $team->team = "FC Tilburg";
        $team->save();

        $team = new Team();
        $team->name = "Sam";
        $team->team = "FC Roosendaal";
        $team->save();

        $team = new Team();
        $team->name = "Jorjan";
        $team->team = "FC Dorst";
        $team->save();
    }
}
