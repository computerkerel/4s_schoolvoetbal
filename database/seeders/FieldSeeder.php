<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $field = new Field();
        $field->naam = "Veld 1";
        $field->aangemaakt_door_id = 1;
        $field->save();

        $field = new Field();
        $field->naam = "Veld 2";
        $field->aangemaakt_door_id = 2;
        $field->save();

        $field = new Field();
        $field->naam = "Veld 3";
        $field->aangemaakt_door_id = 3;
        $field->save();
    }
}
