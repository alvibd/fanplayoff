<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \GuzzleHttp\Client as Guzzle;
use Psr\Container\ContainerInterface;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function everythingAllowed(ContainerInterface $container)
    {
        $nfl = $container->get('App\Sportradar\NationalFootballLeague');
        dump($nfl->getTeams());
//        $client = new Guzzle();
//        $response = $client->request('get', 'http://api.sportradar.us/nfl-ot2/players/04ca4fb9-194e-47fe-8fc8-adb5790a8e78/profile.json?api_key=fpyzj35z5ckedtnvjuxuyuje');
//
//        $response = json_decode($response->getBody()->getContents());
//
//        dump($response);
//        return $response->getBody()->getContents();
    }
}
