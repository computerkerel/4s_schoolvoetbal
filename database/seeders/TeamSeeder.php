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
        $team -> name = "ibrahim";
        $team -> team = "Fc Breda";
        $team -> save();

        $team = new Team();
        $team -> name = "Noor";
        $team -> team = "Fc Tilburg";
        $team -> save();

        $team = new Team();
        $team -> name = "sam";
        $team -> team = "Fc Roosendaal";
        $team -> save();
    }
}
