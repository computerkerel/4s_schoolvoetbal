<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheidsrechter extends Model
{
    use HasFactory;
    protected $table = 'scheidsrechters';

    public function matches()
    {
        return $this->hasMany(matchs::class, 'match_id');
    }

    public function scheidsrechter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
