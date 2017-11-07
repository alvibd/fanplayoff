<?php
/**
 * Created by PhpStorm.
 * User: Nvisio - Laptop 01
 * Date: 11/7/2017
 * Time: 4:51 PM
 */

use App\GameEngine\GameEngineInterface;
use App\Sportradar\NationalFootballLeague;
use App\Model\Player;

class ScoringEngine implements GameEngineInterface
{
    private $nfl;

    public function __construct(NationalFootballLeague $footballLeague)
    {
        $this->nfl = $footballLeague;
    }

    public function calculateDefenseSack(Player $player)
    {
        // TODO: Implement calculateDefenseSack() method.
    }
}