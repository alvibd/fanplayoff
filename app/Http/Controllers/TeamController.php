<?php

namespace App\Http\Controllers;

use App\Model\League;
use App\Model\Team;
use App\Rules\AlreadyJoined;
use App\Rules\LeagueFull;
use App\Rules\LeaguePasswordMatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function joinLeague(Request $request)
    {
        $league = League::findOrFail($request->get('league_id'));

        $user = Auth::user();
//        dump($request);
        $request->validate([
            'league_id' => [
                'required',
                new AlreadyJoined($league, $user->id),
                'exists:leagues,id',
                new LeagueFull($league),
            ],
            'team_name' => 'required|string'
        ]);
        $data = $request->all();



        $team = new Team();

        if ($request->has('team_password'))
        {
            $request->validate([
                'team_password' => [
                    'required',
                    new LeaguePasswordMatch($league->password),
                ],
            ]);
        }

        $team->league()->associate($league);
        $team->owner()->associate($user);
        $team->name= $data['team_name'];
        $team->league_position = 0;
        $team->draft_order = 0;
        $team->total_points = 0.0;
        $team->saveOrFail();

        return redirect(route('league.home',['id'=> $league->id]));

    }

    public function showTeamInfo(Team $team)
    {
        return view('team_roster', ['team' => $team]);
    }
}
