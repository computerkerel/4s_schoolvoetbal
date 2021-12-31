<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Match extends Model
{
    use HasFactory;

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');

    }

    public function scheidsrechter()
    {
        return $this->belongsTo(User::class, 'scheidsrechter_id');
    }

    public  function field()
    {
        return $this->belongsTo(Field::class,'field_id');
    }
}
