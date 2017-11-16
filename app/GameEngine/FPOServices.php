<?php
namespace App\GameEngine;
/**
 * Created by PhpStorm.
 * User: alvi
 * Date: 11/15/17
 * Time: 6:19 AM
 */
use App\Sportradar\NFLOfficialAPIv2 as Nfl;
use App\Model\Player;
use App\model\League;
use App\Model\ScoringCriteria;
use Carbon\Carbon;

class FPOServices
{
    private $nfl;
    private $engine;

    public function __construct(Nfl $APIv2, ScoringEngine $engine)
    {
        $this->nfl = $APIv2;
        $this->engine = $engine;
    }

    public function calculatePlayerWeeklyScore(Player $player, $week, League $league)
    {
        $games = [];
        $stats = (object) null;
        $result = [];

        $games = $this->getGames($player->sr_team_id, $week);

        $league_scorings = $league->leagueScorings()->get();

        foreach ($league_scorings as $league_scoring)
        {
            $result[$league_scoring->scoringCriteria()->first()->name] = 0;
        }

        $fixed_criterias = ScoringCriteria::whereIsFixed(true)->get();

        foreach ($fixed_criterias as $fixed)
        {
//            dump($fixed->name);
            $result[$fixed->name] = 0;
        }

        foreach ($games as $game)
        {
            switch ($player->sr_team_id)
            {
                case $this->nfl->getGameStatistics($game)->statistics->home->id:
                    $stats = $this->nfl->getGameStatistics($game)->statistics->home;
                    break;
                case $this->nfl->getGameStatistics($game)->statistics->away->id:
                    $stats = $this->nfl->getGameStatistics($game)->statistics->away;
                    break;
            }

            $result = $this->getScorings($player, $league_scorings, $stats, $result, $fixed_criterias);
        }
        dump($result);

    }

    protected function getScorings($player, $league_scorings, $obj, $result, $fixed_criterias)
    {
        foreach ($league_scorings as $league_scoring)
        {
            switch ($league_scoring->scoringCriteria()->first()->name)
            {
                case 'Sack':
                    $result['Sack']+= $this->engine->calculateDefenseSack($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Interception':
                    $result['Interception'] += $this->engine->calculateDefenseInterception($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Fumble Recovery':
                    $result['Fumble Recovery'] += $this->engine->calculateFumbleRecoveries($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Touchdown':
                    $result['Touchdown'] += $this->engine->calculateTouchdowns($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Safety':
                    $result['Safety'] += $this->engine->calculateSefeties($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Block Kick':
                    $result['Block Kick'] += $this->engine->calculateBlockKicks($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Kickoff and Punt return Touchdowns':
                    $result['Kickoff and Punt return Touchdowns'] += $this->engine->calculateKickoffPuntReturnTouchdowns($player, $obj, $league_scoring->custom_point);
                    break;
//                case 'Passing Yards':
//                    $result['Passing Yards'] += $this->engine->calculatePassingYards($player, $obj, $league_scoring->custom_point);
//                    break;
                case 'Passing Touchdowns':
                    $result['Passing Touchdowns'] += $this->engine->calculatePassingTouchdowns($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Interceptions':
                    $result['Interceptions'] += $this->engine->calculateOffenseInterceptions($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Rushing Touchdowns':
                    $result['Rushing Touchdowns'] += $this->engine->calculateRushingTouchdowns($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Receptions':
                    $result['Receptions'] += $this->engine->calculateReceivingReceptions($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Receiving Touchdowns':
                    $result['Receiving Touchdowns'] += $this->engine->calculateReceivingTouchdowns($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Return Touchdowns':
                    $result['Return Touchdowns'] += $this->engine->calculatePuntReturnTouchdowns($player, $obj, $league_scoring->custom_point);
                    break;
                case '2-Points Conversions':
                    $result['2-Points Conversions'] += $this->engine->calculateExtraPointConversions($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Fumble Lost':
                    $result['Fumble Lost'] += $this->engine->calculateFumbleLosts($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Points After Attempt Made':
                    $result['Points After Attempt Made'] += $this->engine->calculateExtraPointMade($player, $obj, $league_scoring->custom_point);
                    break;
                case 'Field Goals 0-19 Yards':
                    $yards = $this->getFieldGoalYards($player, $obj);
                    $result['Field Goals 0-19 Yards'] += (($yards >=0 && $yards <= 19)? $league_scoring->custom_point: 0);
                    break;
                case 'Field Goals 20-29 Yards':
                    $yards = $this->getFieldGoalYards($player, $obj);
                    $result['Field Goals 20-29 Yards'] += (($yards >=20 && $yards <= 29)? $fixed_criterias->whereName('Field Goals 20-29 Yards')->first()->custom_point: 0);
                    break;
                case 'Field Goals 30-39 Yards':
                    $yards = $this->getFieldGoalYards($player, $obj);
                    $result['Field Goals 30-39 Yards'] += (($yards >=30 && $yards <= 39)? $league_scoring->custom_point: 0);
                    break;
                case 'Field Goals 40-49 Yards':
                    $yards = $this->getFieldGoalYards($player, $obj);
                    $result['Field Goals 40-49 Yards'] += (($yards >=40 && $yards <= 49)? $league_scoring->custom_point: 0);
                    break;
                case 'Field Goals 50+ Yards':
                    $yards = $this->getFieldGoalYards($player, $obj);
                    $result['Field Goals 50+ Yards'] += ($yards >=50? $league_scoring->custom_point: 0);
                    break;
            }

        }
        foreach ($fixed_criterias as $fixed)
        {
            switch ($fixed->name)
            {
                case 'Rushing Yards':
                    $result['Rushing Yards'] += $this->engine->calculateRushingYards($player, $obj);
                    break;
                case 'Receiving Yards':
                    $result['Receiving Yards'] += $this->engine->calculateReceivingYards($player, $obj);
                    break;
                case 'Passing Yards':
                    $result['Passing Yards'] += $this->engine->calculatePassingYards($player, $obj);
                    break;
            }
        }
        return $result;
    }

    protected function getGames($team_id, $week)
    {
        $games = [];
        $schedule = $this->nfl->getWeeklySchedule(Carbon::now()->year, 'REG', $week);

        foreach ($schedule->week->games as $game)
        {
            if(in_array($team_id, [$game->home->id,$game->away->id]) && $game->status == 'closed')
            {
                $games[] = $game->id;
            }
        }

        return $games;
    }

    protected function getFieldGoalYards($player, $obj)
    {
        foreach ($obj->field_goals->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->yards;
            }
        }
        return 0;
    }

}