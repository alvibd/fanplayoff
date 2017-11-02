<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //

    public function setIsAvailableAttribute($is_available=1)
    {
        $this->attributes['is_available'] = $is_available;
    }
}
