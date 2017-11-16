<?php
/**
 * Created by PhpStorm.
 * User: Nvisio - Laptop 01
 * Date: 11/7/2017
 * Time: 4:51 PM
 */
namespace App\GameEngine;

use App\GameEngine\GameEngineInterface;
use App\Sportradar\NFLOfficialAPIv2 as NFL;
use App\Model\Player;

class ScoringEngine implements GameEngineInterface
{
    private $nfl;

    public function __construct(NFL $nfl)
    {
        $this->nfl = $nfl;
    }

    public function calculateDefenseSack(Player $player, $object)
    {

    }
}