<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LeagueRoster extends Model
{
    const POSITIONS = [
        'QB' => 'QB',
        'RB' => 'RB',
        'WR' => 'WR',
        'TE' => 'TE',
        'FLEX' => 'FLEX',
        'BE' => 'BE',
        'DEF' => 'DEF',
        'K' => 'K'
    ];

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

    /******************
     * Relations End
     * **********
     */
}
