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
    public function calculateDefenseSack(Player $player);
}