<?php

namespace App\Http\Controllers;

use App\Model\League;
use App\Model\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function joinLeague(Request $request)
    {
        $request->validate([
            'league_id' => 'required|exists:leagues,id',
            'team_name' => 'required|string'
        ]);
        $data = $request->all();
        dump($data);
        $league = League::findOrFail($data['league_id'])->first();

        $team = new Team();

        $team->league()->associate($league);
        $team->owner()->associate(Auth::user());
        $team->name= $data['team_name'];
        $team->league_position = 0;
        $team->draft_order = 0;
        $team->total_points = 0.0;
//        $team->saveOrFail();

//        return redirect(route('league.home',['id'=> $league->id]));

    }
}
