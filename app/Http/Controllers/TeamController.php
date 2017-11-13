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
        $data = $request->all();

        $league = League::findOrFail($data['league_id'])->first();

        $team = new Team();

        $team->league()->associate($league);
        $team->owner()->associate(Auth::user());
        $team->name= $data['team_name'];
        $team->saveOrFail();

    }
}
