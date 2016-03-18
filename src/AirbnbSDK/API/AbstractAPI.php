<?php

namespace AirbnbSDK\API;

use AirbnbSDK\AirbnbSDK;
use Psr\Http\Message\ResponseInterface as GuzzleResponseInterface;
use AirbnbSDK\Response\ResponseInterface as AirbnbSDKResponseInterface;

abstract class AbstractAPI
{
    /**
     * @var AirbnbSDK $client
     */
    protected $client;

    /**
     * @param AirbnbSDK $client
     */
    public function __construct(AirbnbSDK $client)
    {
        $this->client = $client;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param array $parameters
     * @param array $headers
     * @return AirbnbSDKResponseInterface|GuzzleResponseInterface|null
     */
    protected function getRequest($path, $deserializeTo = null, array $parameters = [], $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->get($path, $deserializeTo, $parameters, $headers);
        return $response;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return AirbnbSDKResponseInterface|GuzzleResponseInterface|null
     */
    protected function postRequest($path, $deserializeTo = null, $body = null, array $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->post($path, $deserializeTo, $body, $headers);
        return $response;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return AirbnbSDKResponseInterface|GuzzleResponseInterface|null
     */
    protected function putRequest($path, $deserializeTo = null, $body = null, array $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->put($path, $deserializeTo, $body, $headers);
        return $response;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return AirbnbSDKResponseInterface|GuzzleResponseInterface|null
     */
    protected function deleteRequest($path, $deserializeTo = null, $body = null, array $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->delete($path, $deserializeTo, $body, $headers);
        return $response;
    }
}