<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LeagueScoring extends Model
{
    public $timestamps = false;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function scoringCriteria()
    {
        return $this->belongsTo('App\Model\ScoringCriteria');
    }

    /******************
     * Relations End
     * **********
     */
}
