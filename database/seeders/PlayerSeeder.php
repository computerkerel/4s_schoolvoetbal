<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ["Sjaak Stuurman", "Gerard Joling", "Vincent Hooft", "Fedde van Gils", "Bart Roos", "Richard Batsbak", "Gerrie van Boven", "Rikkert Biemans", "Robbie Schuurmans", "Barrie Butsers", "Marty McFly"],
            ["Harry Potter", "Johnny Depp", "Hans Teeuwen", "Stephen Hawking", "Patrick Stump", "Matt Bellamy", "Bill Gates", "Roger Penrose", "Steven Spielberg", "James Bond", "Pete Wentz"]
        ];

        $index = 1;
        foreach($teams as $team=>$players){
            foreach($players as $player){
                $teamMember = new Player();
                $teamMember->naam = $player;
                $teamMember->team_id = $index;
                $teamMember->save();
            }
            $index++;
        }
    }
}
