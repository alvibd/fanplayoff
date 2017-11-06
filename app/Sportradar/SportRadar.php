<?php
/**
 * Created by PhpStorm.
 * User: alvi
 * Date: 11/7/17
 * Time: 1:57 AM
 */

namespace App\Sportradar;


abstract class SportRadar
{
    abstract protected function constructURL($url);
    abstract protected function callApi($api_url);

    /**
     * @param $response
     * @return mixed
     */
    protected function getResponse($response)
    {
        return json_decode($response->getBody()->getContents());
    }
}