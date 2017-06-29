<?php

namespace AirbnbSDK;

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

use AirbnbSDK\API\Listings as ListingsAPI;
use AirbnbSDK\API\Reviews as ReviewsAPI;
use AirbnbSDK\API\Users as UsersAPI;
use AirbnbSDK\HttpClient\HttpClient;
use AirbnbSDK\HttpClient\HttpClientInterface;

class AirbnbSDK
{
    /**
     * @var string $apiKey
     */
    private $apiKey;

    /**
     * @var HttpClientInterface $httpClient
     */
    private $httpClient;

    /**
     * @param string $apiKey
     * @param HttpClientInterface $httpClient
     */
    public function __construct($apiKey, HttpClientInterface $httpClient = null)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    /**
     * @return HttpClientInterface
     */
    public function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = new HttpClient($this->apiKey);
        }

        return $this->httpClient;
    }

    /**
     * @param HttpClientInterface $httpClient
     */
    public function setHttpClient(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function clearHeaders()
    {
        $this->getHttpClient()->clearHeaders();
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->getHttpClient()->setHeaders($headers);
    }

    /**
     * @return ReviewsAPI
     */
    public function reviews()
    {
        return new ReviewsAPI($this);
    }

    /**
     * @return ListingsAPI
     */
    public function listings()
    {
        return new ListingsAPI($this);
    }

    /**
     * @return UsersAPI
     */
    public function users()
    {
        return new UsersAPI($this);
    }
}
