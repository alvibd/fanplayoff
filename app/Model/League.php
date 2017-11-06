<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
//    todo add roster size to league

    public $timestamps = false;
    const DRAFT_TYPE = [
        'random' => 'RANDOM',
        'custom' => 'CUSTOM'
    ];
    const SCORING_TYPE = [
        'custom' => 'CUSTOM',
        'default' => 'DEFAULT'
    ];

    /********************
     * Relations Start
     * ************
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo('App\Model\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leagueRosters()
    {
        return $this->hasMany('App\Model\LeagueRoster');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scoringCriterias()
    {
        return $this->hasMany('App\Model\ScoringCriteria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leagueScorings()
    {
        return $this->hasMany('App\Model\LeagueScoring');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams()
    {
        return $this->hasMany('App\Model\Team');
    }

    /******************
     * Relations End
     * **********
     */

    /**
     * @param int $privacy
     */
    public function setPrivacyAttribute($privacy=1)
    {
        $this->attributes['privacy'] = $privacy;
    }
}
