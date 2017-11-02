<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public $timestamps = false;
    const DRAFT_TYPE = [
        'random' => 'RANDOM',
        'custom' => 'CUSTOM'
    ];
    const SCORING_TYPE = [
        'custom' => 'CUSTOM',
        'default' => 'DEFAULT'
    ];

    public function setPrivacyAttribute($privacy=1)
    {
        $this->attributes['privacy'] = $privacy;
    }
}
