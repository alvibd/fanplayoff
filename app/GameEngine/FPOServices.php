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

        $games = $this->getGames($player->sr_team_id, $week);
        dump($games);

        $league_scorings = $league->leagueScorings()->get();

        foreach ($games as $game)
        {
            dump($this->nfl->getGameStatistics($game)->statistics->home->id);
        }

        foreach ($league_scorings as $league_scoring)
        {
            dump($league_scoring->scoringCriteria()->first()->name);
//            switch ($league_scoring->scoringCriteria()->first()->name)
//            {
//                case 'sack':
//            }
        }

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

}