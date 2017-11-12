<?php

namespace App\Http\Controllers;

use App\Model\ScoringCriteria;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createLeague()
    {
        $scoringCriterias = ScoringCriteria::whereIsFixed(0)->get();

        return view('create_league', ['scoring_criterias' => $scoringCriterias]);
    }
}
