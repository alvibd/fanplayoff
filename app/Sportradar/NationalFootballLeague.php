<?php
/**
 * Created by PhpStorm.
 * User: Alvi Ahmed
 * Date: 11/1/2017
 * Time: 11:40 AM
 */
namespace App\Sportradar;

use Carbon\Carbon;
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


    /*****************************
     * All helper methods end
     * *******************
     */

    /*********************************
     * Sportradar Api methods start
     * *************************
     */

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/extended-boxscore.{format}?api_key={your_api_key}
     * @param int $year
     * @param string $nflSeasion
     * @param int $week
     * @param string $away
     * @param string $home
     * @return mixed
     */
    protected function extendedBoxscore($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/extended-boxscore');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/boxscore.{format}?api_key={your_api_key}
     * @param  int $year
     * @param string $nflSeason
     * @param int $week
     * @param string $away
     * @param string $home
     * @return mixed
     */
    protected function gameBoxScore($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/boxscore');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/depthchart.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @return mixed
     */
    protected function gameDepthChart($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/depthchart');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/roster.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @return mixed
     */
    protected function gameRoster($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/roster');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/statistics.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @return mixed
     */
    protected function gameStatistics($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/statistics');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/summary.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @return mixed
     */
    protected function gameSummary($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/summary');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/injuries.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @return mixed
     */
    protected function injuries($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/injuries');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/pbp.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @return mixed
     */
    protected function playByPlay($year, $nflSeason, $week, $away, $home)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/pbp');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/{away_team}/{home_team}/plays/{play_id}.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @param $week
     * @param $away
     * @param $home
     * @param $playId
     * @return mixed
     */
    protected function playSummary($year, $nflSeason, $week, $away, $home, $playId)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/'.$away.'/'.$home.'/plays/'.$playId);
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{year}/rankings.{format}?api_key={your_api_key}
     * @param $year
     * @return mixed
     */
    protected function rankings($year)
    {
        return $this->callApi('teams/'.$year.'/rankings');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/schedule.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @return mixed
     */
    protected function seasonSchedule($year, $nflSeason)
    {
        return $this->callApi($year.'/'.$nflSeason.'/schedule');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{team}/{year}/{nfl_season}/statistics.{format}?api_key={your_api_key}
     * @param $team
     * @param $year
     * @param $nflSeason
     * @return mixed
     */
    protected function seasonalStatistics($team, $year, $nflSeason)
    {
        return $this->callApi('teams/'.$team.'/'.$year.'/'.$nflSeason.'/statistics');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{year}/{nfl_season}/standings.{format}?api_key={your_api_key}
     * @param $year
     * @param $nflSeason
     * @return mixed
     */
    protected function standings($year, $nflSeason)
    {
        return $this->callApi('teams/'.$year.'/'.$nflSeason.'/standings');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{team}/depthchart.{format}?api_key={your_api_key}
     * @param $team
     * @return mixed
     */
    protected function teamDepthChart($team)
    {
        return $this->callApi('teams/'.$team.'/depthchart');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/hierarchy.{format}?api_key={your_api_key}
     * @return mixed
     */
    protected function teamHierarchy()
    {
        return $this->callApi('teams/hierarchy');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{team}/roster.{format}?api_key={your_api_key}
     * @return mixed
     */
    protected function teamRoster($team)
    {
        return $this->callApi('teams/'.$team.'/roster');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/boxscore.{format}?api_key={your_api_key}
     * @return mixed
     */
    protected function weeklyBoxscore($year, $nflSeason, $week)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/boxscore');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/leaders.{format}?api_key={your_api_key}
     * @return mixed
     */
    protected function weeklyLeagueLeaders($year, $nflSeasion, $week)
    {
        return $this->callApi($year.'/'.$nflSeasion.'/'.$week.'/leaders');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/{year}/{nfl_season}/{week}/schedule.{format}?api_key={your_api_key}
     * @return mixed
     */
    protected function weeklySchedule($year, $nflSeason, $week)
    {
        return $this->callApi($year.'/'.$nflSeason.'/'.$week.'/schedule');
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