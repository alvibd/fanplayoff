<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LeagueRoster extends Model
{
    /********************
     * Relations Start
     * ************
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function league()
    {
        return $this->belongsTo('App\Model\League');
    }

    /******************
     * Relations End
     * **********
     */
}
