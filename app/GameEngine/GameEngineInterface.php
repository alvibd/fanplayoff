<?php
/**
 * Created by PhpStorm.
 * User: Nvisio - Laptop 01
 * Date: 11/7/2017
 * Time: 2:15 PM
 */
namespace App\GameEngine;

use App\Model\Player;

interface GameEngineInterface
{
    public function calculateDefenseSack(Player $player, $object, $point);

    public function calculateDefenseInterception($player, $obj, $point);

    public function calculateFumbleRecoveries($player, $obj, $point);

    public function calculateTouchdowns($player, $obj, $point);

    public function calculateSefeties($player, $obj, $point);

    public function calculateBlockKicks($player, $obj, $point);

    public function calculateKickoffPuntReturnTouchdowns($player, $obj, $point);

    public function calculatePassingYards($player, $obj, $point);

    public function calculatePassingTouchdowns($player, $obj, $point);

    public function calculateOffenseInterceptions($player, $obj, $point);

    public function calculateRushingTouchdowns($player, $obj, $point);

    public function calculateReceivingReceptions($player, $obj, $point);

    public function calculateReceivingTouchdowns($player, $obj, $point);

    public function calculatePuntReturnTouchdowns($player, $obj, $point);

    public function calculateExtraPointConversions($player, $obj, $point);

    public function calculateFumbleLosts($player, $obj, $point);
}