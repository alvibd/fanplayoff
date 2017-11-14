<?php

namespace App\Http\Controllers;

use App\Model\League;
use App\Model\LeagueRoster;
use App\Model\LeagueScoring;
use App\Model\ScoringCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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

    public function storeLeague(Request $request)
    {
//        dump($request);
        $request->validate([
            'scoring_criteria' => 'required',
            'league_name' => 'required|string',
            'no_of_teams' => 'required|numeric|min:3|max:5',
            'privacy' => 'required|boolean',
            'draft_time' => 'required|after_or_equal:'.Carbon::now(),
            'draft_type' => [
                'required',
                Rule::in(League::DRAFT_TYPE)
            ],
            'roster_size' => 'required|numeric|min:5',
            'total_starters' => 'required',
            'total_on_bench' => 'required|numeric|min:1',
            'QB' => 'required',
            'RB' => 'required',
            'WR' => 'required',
            'TE' => 'required',
            'FLEX' => 'required',
            'DEF' => 'required',
            'K' => 'required',
            'BE' => 'required',
            'scoring_type' => [
                'required',
                Rule::in(League::SCORING_TYPE)
            ]
        ]);
        $data = $request->all();

        $league = new League();
        $league->name = $data['league_name'];
        $league->no_of_teams = $data['no_of_teams'];
        $league->privacy = $data['privacy'];
        $league->draft_time = $data['draft_time'];
        $league->draft_type = $data['draft_type'];
        $league->roster_size = $data['roster_size'];
        $league->total_starters = $data['total_starters'];
        $league->total_on_bench = $data['total_on_bench'];
        $league->scoring_type = $data['scoring_type'];
        $league->creator()->associate(Auth::User());
        $league->saveOrFail();

        if ($data['scoring_type'] == League::SCORING_TYPE['default'])
        {
            foreach (ScoringCriteria::whereIsFixed(0)->get() as $scoring_criteria)
            {
                $league_scoring = new LeagueScoring();
                $league_scoring->scoringCriteria()->associate($scoring_criteria);
                $league_scoring->league()->associate($league);
                $league_scoring->custom_point = $scoring_criteria->default_point;
                $league_scoring->saveorFail();
            }
        }
        else
        {
            foreach ($data['scoring_criteria'] as $scoring_criterion)
            {
                $league_scoring = new LeagueScoring();
                $league_scoring->scoringCriteria()->associate(ScoringCriteria::findOrFail($scoring_criterion));
                $league_scoring->league()->associate($league);
                $league_scoring->custom_point = $data['custom_point'][$scoring_criterion];
                $league_scoring->saveOrFail();
            }
        }

        foreach (LeagueRoster::POSITIONS as $position)
        {
            $leagueRoster = new LeagueRoster();
            $leagueRoster->position = $position;
            $leagueRoster->players_allowed = $data[$position];
            $leagueRoster->league()->associate($league);
            $leagueRoster->saveOrFail();
        }

        return redirect(route('show.profile'));
    }

    public function showLeagues()
    {
        $leagues = League::all();

        return view('join_league', ['leagues' => $leagues]);
    }

    public function showLeague($id)
    {
        $league = League::findOrFail($id)->first();

        return view('league_home', compact('league'));
    }
}
