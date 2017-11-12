<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /********************
     * Relations Start
     * ************
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Teams()
    {
        return $this->belongsToMany('App\Model\Team');
    }

    /******************
     * Relations End
     * **********
     */

    public function setIsAvailableAttribute($is_available=1)
    {
        $this->attributes['is_available'] = $is_available;
    }
}
