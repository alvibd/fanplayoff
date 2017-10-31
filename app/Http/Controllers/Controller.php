<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \GuzzleHttp\Client as Guzzle;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function everythingAllowed()
    {
        $client = new Guzzle();
        $response = $client->request('get', 'http://api.sportradar.us/nfl-ot2/league/hierarchy.json?api_key=fpyzj35z5ckedtnvjuxuyuje');

//        dump($response->getBody()->getContents());
        return $response->getBody()->getContents();
    }
}
