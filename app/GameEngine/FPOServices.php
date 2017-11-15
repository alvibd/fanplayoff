<?php
/**
 * Created by PhpStorm.
 * User: alvi
 * Date: 11/15/17
 * Time: 6:19 AM
 */
use App\Sportradar\NFLOfficialAPIv2 as Nfl;
class FPOServices
{
    private $nfl;

    public function __construct(Nfl $APIv2)
    {
        $this->nfl = $APIv2;
    }

}