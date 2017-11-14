<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \GuzzleHttp\Client as Guzzle;
use Illuminate\Support\Carbon;
use Psr\Container\ContainerInterface;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function everythingAllowed(ContainerInterface $container)
    {
        $nfl = $container->get('App\Sportradar\NFLOfficialAPIv2');
        dump($nfl->getLeagueHierarchy());
        $carbon =  new Carbon();
        dump($carbon->startOfWeek());
//        $team_hierarchy = $nfl->getTeams();
//        $team_hierarchy = $team_hierarchy->conferences;
//
////        dump($team_hierarchy);
//        foreach ($team_hierarchy as $conference)
//        {
////            dump($conference->divisions);
//            foreach ($conference->divisions as $division)
//            {
////                dump($division->teams);
//                foreach ($division->teams as $team)
//                {
//                    dump($nfl->getTeamRoster($team->id));
//                }
//            }
//        }
//        $client = new Guzzle();
//        $response = $client->request('get', 'http://api.sportradar.us/nfl-ot2/players/04ca4fb9-194e-47fe-8fc8-adb5790a8e78/profile.json?api_key=fpyzj35z5ckedtnvjuxuyuje');
//
//        $response = json_decode($response->getBody()->getContents());
//
//        dump($response);
//        return $response->getBody()->getContents();
    }
}
