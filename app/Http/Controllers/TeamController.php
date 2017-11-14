<?php

namespace App\Http\Controllers;

use App\Model\League;
use App\Model\Team;
use App\Rules\AlreadyJoined;
use App\Rules\LeagueFull;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function joinLeague(Request $request)
    {
        $league = League::findOrFail($request->get('league_id'))->first();
        $user = Auth::user();
//        dump($league->teams()->count());
        $request->validate([
            'league_id' => [
                'required',
                'exists:leagues,id',
                new AlreadyJoined($league, $user->id),
                new LeagueFull($league),
            ],
            'team_name' => 'required|string'
        ]);
        $data = $request->all();



        $team = new Team();

        $team->league()->associate($league);
        $team->owner()->associate($user);
        $team->name= $data['team_name'];
        $team->league_position = 0;
        $team->draft_order = 0;
        $team->total_points = 0.0;
//        $team->saveOrFail();

//        return redirect(route('league.home',['id'=> $league->id]));

    }
}
