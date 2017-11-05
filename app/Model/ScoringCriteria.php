<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ScoringCriteria extends Model
{
    public $timestamps = false;

    /********************
     * Relations Start
     * ************
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leagueScroings()
    {
        return $this->hasMany('App\Model\LeagueScoring');
    }

    /******************
     * Relations End
     * **********
     */
}
