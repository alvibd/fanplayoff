<?php
/**
 * Created by PhpStorm.
 * User: Nvisio - Laptop 01
 * Date: 11/7/2017
 * Time: 2:15 PM
 */

interface GameEngineInterface
{
    public function calculateDefenseSack();
    public function calculateDefenseInterception();
    public function calculateDefenseFumbleRecovery();
    public function calculateTouchdown();
    public function calculateDefenseSafety();
}