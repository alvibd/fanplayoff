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

    public function calculateDefenseSack(Player $player, $object, $point)
    {
        foreach ($object->defense->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->sacks * $point;
            }
        }
        return 0;
    }

    public function calculateDefenseInterception($player, $obj, $point)
    {
        foreach ($obj->defense->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->interceptions * $point;
            }
        }
        return 0;
    }

    public function calculateFumbleRecoveries($player, $obj, $point)
    {
        foreach ($obj->defense->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->fumble_recoveries * $point;
            }
        }
        return 0;
    }

    public function calculateTouchdowns($player, $obj, $point)
    {
        foreach ($obj->rushing->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->touchdowns * $point;
            }
        }
        return 0;
    }

    public function calculateSefeties($player, $obj, $point)
    {
        foreach ($obj->defense->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->safeties * $point;
            }
        }
        return 0;
    }

    public function calculateBlockKicks($player, $obj, $point)
    {
        foreach ($obj->field_goals->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->blocked * $point;
            }
        }
        return 0;
    }

    public function calculateKickoffPuntReturnTouchdowns($player, $obj, $point)
    {
        $result = 0;
        foreach ($obj->kick_returns->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                $result += $pl->touchdowns * $point;
            }
        }

        foreach ($obj->punt_returns->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                $result += $pl->touchdowns * $point;
            }
        }
        return $result;
    }

    public function calculatePassingYards($player, $obj, $point)
    {
        foreach ($obj->passing->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->yards * $point;
            }
        }
        return 0;
    }

    public function calculatePassingTouchdowns($player, $obj, $point)
    {
        foreach ($obj->passing->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->touchdowns * $point;
            }
        }
        return 0;
    }

    public function calculateOffenseInterceptions($player, $obj, $point)
    {
        foreach ($obj->passing->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->interceptions * $point;
            }
        }
        return 0;
    }

    public function calculateRushingTouchdowns($player, $obj, $point)
    {
        foreach ($obj->rushing->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->touchdowns * $point;
            }
        }
        return 0;
    }

    public function calculateReceivingReceptions($player, $obj, $point)
    {
        foreach ($obj->receiving->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->receptions * $point;
            }
        }
        return 0;
    }

    public function calculateReceivingTouchdowns($player, $obj, $point)
    {
        foreach ($obj->receiving->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->touchdowns * $point;
            }
        }
        return 0;
    }

    public function calculatePuntReturnTouchdowns($player, $obj, $point)
    {
        foreach ($obj->punt_returns->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->touchdowns * $point;
            }
        }
        return 0;
    }

    public function calculateExtraPointConversions($player, $obj, $point)
    {
        foreach ($obj->extra_points->conversions->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->successes * $point;
            }
        }
        return 0;
    }

    public function calculateFumbleLosts($player, $obj, $point)
    {
        foreach ($obj->fumbles->players as $pl)
        {
            if($pl->id == $player->sportradar_id)
            {
                return $pl->lost_fumbles * $point;
            }
        }
        return 0;
    }
}