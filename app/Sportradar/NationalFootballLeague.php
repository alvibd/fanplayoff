<?php
/**
 * Created by PhpStorm.
 * User: Alvi Ahmed
 * Date: 11/1/2017
 * Time: 11:40 AM
 */
namespace App\Sportradar;

use Illuminate\Support\Facades\Log;

class NationalFootballLeague
{
    protected $api_key;
    protected $access_level;
    protected $api_version;
    protected $client;
    protected static $BASE_URL = 'http://api.sportradar.us/';

    /**
     * NationalFootballLeague constructor.
     * @param \GuzzleHttp\Client $client
     * @param $api_key
     * @param $access_level
     * @param $api_version
     */
    public function __construct(\GuzzleHttp\Client $client, $api_key, $access_level, $api_version)
    {
        $this->access_level = $access_level;
        $this->api_key = $api_key;
        $this->api_version = $api_version;
        $this->client = $client;
    }

    /*****************************
     * All helper methods start
     * *********************
     */

    /**
     * @param $team_id
     * @return mixed
     */
    public function teamPlayers($team_id)
    {
        return $this->teamRoster($team_id);
    }

    /**
     * @param $player_id
     * @return mixed
     */
    public function playerInfo($player_id)
    {
        return$this->playerProfile($player_id);
    }

    /**
     * @param $leagueHierarchy
     * @return array
     */
    public function allTeams()
    {
        $leagueHierarchy = $this->leagueHierarchy();
        $teams = [];
        foreach ($leagueHierarchy->conferences as $conference)
        {
            foreach ($conference->divisions as $division)
            {
                foreach ($division->teams as $team)
                {
                    $teams[]= $team;
                }
            }
        }
        return $teams;
    }

    /*****************************
     * All helper methods end
     * *******************
     */

    /*********************************
     * Sportradar Api methods start
     * *************************
     */

    /**
     * @return mixed
     */
    protected function leagueHierarchy()
    {
        return $this->callApi('league/hierarchy');

    }

    /**
     * @param $team_id
     * @return mixed
     */
    protected function teamRoster($team_id)
    {
        return $this->callApi('teams/'.$team_id.'/full_roster');
    }

    /**
     * @param $player_id
     * @return mixed
     */
    protected function playerProfile($player_id)
    {
        return $this->callApi('players/'.$player_id.'/profile');
    }

    /*******************************
     * Sportradar Api methods End
     * ***********************
     */

    /**
     * @param $url
     * @return string
     */
    protected function constructURL($url)
    {
        return self::$BASE_URL.'nfl-'.($this->access_level.$this->api_version).'/'.$url.'.json?api_key='.$this->api_key;
    }

    /**
     * @param $api_url
     * @return mixed
     */
    protected function callApi($api_url)
    {
        $response = $this->client->request('get', $this->constructURL($api_url));
        if ($response->getStatusCode()!= 200)
        {
            Log::error('Error From Sportradar');
            abort($response->getStatusCode(), $response->getReasonPhrase(), $response->getHeaders());
        }

        return $this->getResponse($response);

    }

    /**
     * @param $response
     * @return mixed
     */
    protected function getResponse($response)
    {
        return json_decode($response->getBody()->getContents());
    }

}