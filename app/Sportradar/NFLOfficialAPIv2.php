<?php
/**
 * Created by PhpStorm.
 * User: Nvisio - Laptop 01
 * Date: 11/14/2017
 * Time: 12:50 PM
 */

namespace App\Sportradar;

use GuzzleHttp\Client as Client;


class NFLOfficialAPIv2 extends SportRadar
{
    protected $api_key;
    protected $access_level;
    protected $api_version;
    protected $client;
    protected static $BASE_URL = 'http://api.sportradar.us/';

    public function __construct(Client $client, $api_key, $access_level)
    {
        $this->client = $client;
        $this->api_key = $api_key;
        $this->access_level = $access_level;
        $this->api_version = 2;
    }

    /*****************************
     * All helper methods start
     * *********************
     */

    public function getWeeklySchedule($year, $nfl_season, $nfl_season_week)
    {
        return $this->weeklySchedule($year, $nfl_season, $nfl_season_week);
    }

    public function getGameStatistics($game_id)
    {
        return $this->gameStatistics($game_id);
    }

    public function getLeagueHierarchy()
    {
        return $this->leagueHierarchy();
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
     * https://api.sportradar.us/nfl-{access_level}{version}/schema/changelog-v2.0.xsd?api_key={your_api_key}
     * @return mixed
     */
    protected function changeLog()
    {
        return $this->callApi('schema/changelog-v2.0.');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/games/{game_id}/boxscore.{format}?api_key={your_api_key}
     * @param $game_id
     * @return mixed
     */
    protected function gameBoxscore($game_id)
    {
        return $this->callApi('games/'.$game_id.'/boxscore');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/games/{game_id}/roster.{format}?api_key={your_api_key}
     * @param $game_id
     * @return mixed
     */
    protected function gameRoster($game_id)
    {
        return $this->callApi('games/'.$game_id.'/roster');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/games/{game_id}/statistics.{format}?api_key={your_api_key}
     * @param $game_id
     * @return mixed
     */
    protected function gameStatistics($game_id)
    {
        return $this->callApi('games/'.$game_id.'/statistics');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/league/hierarchy.{format}?api_key={your_api_key}
     * @return mixed
     */
    protected function leagueHierarchy()
    {
        return $this->callApi('league/hierarchy');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/games/{game_id}/pbp.{format}?api_key={your_api_key}
     * @param $game_id
     * @return mixed
     */
    protected function playByPlay($game_id)
    {
        return $this->callApi('games/'.$game_id.'/pbp');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/plays/{game_id}/participation.{format}?api_key={your_api_key}
     * @param $game_id
     * @return mixed
     */
    protected function playerParticipation($game_id)
    {
        return $this->callApi('plays/'.$game_id.'/participation');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/players/{player_id}/profile.{format}?api_key={your_api_key}
     * @param $player_id
     * @return mixed
     */
    protected function playerProfile($player_id)
    {
        return $this->callApi('players/'.$player_id.'/profile');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/games/{year}/{nfl_season}/schedule.{format}?api_key={your_api_key}
     * @param $year
     * @param $nfl_season
     * @return mixed
     */
    protected function seasonSchedule($year, $nfl_season)
    {
        return $this->callApi('games/'.$year.'/'.$nfl_season.'/schedule');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/seasontd/{year}/{nfl_season}/teams/{team_id}/statistics.{format}?api_key={your_api_key}
     * @param $year
     * @param $nfl_season
     * @param $team_id
     * @return mixed
     */
    protected function seasonalStatistics($year, $nfl_season, $team_id)
    {
        return $this->callApi('seasontd/'.$year.'/'.$nfl_season.'/teams/'.$team_id.'/statistics');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/seasontd/{year}/standings.{format}?api_key={your_api_key}
     * @param $year
     * @return mixed
     */
    protected function standings($year)
    {
        return $this->callApi('seasontd/'.$year.'/standings');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{team_id}/profile.{format}?api_key={your_api_key}
     * @param $team_id
     * @return mixed
     */
    protected function teamProfile($team_id)
    {
        return $this->callApi('teams/'.$team_id.'/profile');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/teams/{team_id}/full_roster.{format}?api_key={your_api_key}
     * @param $team_id
     * @return mixed
     */
    protected function teamRoster($team_id)
    {
        return $this->callApi('teams/'.$team_id.'/full_roster');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/seasontd/{year}/{nfl_season}/{nfl_season_week}/depth_charts.{format}?api_key={your_api_key}
     * @param $year
     * @param $nfl_season
     * @param $nfl_season_week
     * @return mixed
     */
    protected function weeklyDepthChart($year, $nfl_season, $nfl_season_week)
    {
        return $this->callApi('seasontc/'.$year.'/'.$nfl_season.'/'.$nfl_season_week.'/depth_charts');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/seasontd/{year}/{nfl_season}/{nfl_season_week}/injuries.{format}?api_key={your_api_key}
     * @param $year
     * @param $nfl_season
     * @param $nfl_season_week
     * @return mixed
     */
    protected function weeklyInjuries($year, $nfl_season, $nfl_season_week)
    {
        return $this->callApi('seasontd/'.$year.'/'.$nfl_season.'/'.$nfl_season_week.'/injuries');
    }

    /**
     * https://api.sportradar.us/nfl-{access_level}{version}/games/{year}/{nfl_season}/{nfl_season_week}/schedule.{format}?api_key={your_api_key}
     * @param $year
     * @param $nfl_season
     * @param $nfl_season_week
     * @return mixed
     */
    protected function weeklySchedule($year, $nfl_season, $nfl_season_week)
    {
        return $this->callApi('games/'.$year.'/'.$nfl_season.'/'.$nfl_season_week.'/schedule');
    }

    /*******************************
     * Sportradar Api methods End
     * ***********************
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

    protected function constructURL($url)
    {
        return self::$BASE_URL.'nfl-'.($this->access_level.$this->api_version).'/'.$url.'.json?api_key='.$this->api_key;
    }
}