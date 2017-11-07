<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function league()
    {
        return $this->belongsTo('App\Model\League');
    }
}
